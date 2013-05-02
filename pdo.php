<?php
class Create_PDO
{
    /** @const user name */
    const USER_NAME = 'supermanner';
    /** @const password */
    const PASSWORD = 'manner84';
    /** @const dsn */
    const DSN = 'mysql:dbname=supermanner_board;host=mysql423.db.sakura.ne.jp;charset=utf8';

    var $pdo;

    public function __construct()
    {
        try{
            $this->pdo = new PDO(self::DSN, self::USER_NAME, self::PASSWORD);
        }catch (PDOException $e){
            print('Error:'.$e->getMessage());
            die();
        }
    }

    public function getAlltext($offset = 0, $limit = 4)
    {
        $sql = sprintf('select * from `user_data` LIMIT %d, %d', $offset, $limit);
        try {
            $stmt = $this->pdo->query($sql);
            $data_list = $stmt->fetchAll();
        } catch(PDOException $e) {
            print('Error;'.$e->getMessage());
            die();
        }
        $this->pdo = null;

        return $data_list;
    }
    public function insertText($name, $text)
    {
        $name = htmlspecialchars($name);
        $text = htmlspecialchars($text);
        $format = "INSERT INTO `user_data` (name, text, ctime) values('%s', '%s', %s);";
        $sql = sprintf($format, $name, $text, time());
        try {
            $stmt = $this->pdo->query($sql);
        } catch(PDOException $e) {
            print('Error:'.$e->getMessage());
            die();
        }
        $this->pdo = null;
        return $stmt;
    }
}
