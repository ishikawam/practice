<?php
class Create_PDO
{
    /** @const user name */
    const USER_NAME = 'supermanner';
    /** @const password */
    const PASSWORD = 'ERO0pK68';
    /** @const dsn */
    const DSN = 'mysql:dbname=supermanner_board;host=mysql423.db.sakura.ne.jp';

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

    public function getAlltext()
    {
        $sql = 'select * from `user_data`';
        try {
            $stmt = $this->pdo->query($sql);
        } catch(PDOException $e) {
            print('Error;'.$e->getMessage());
            die();
        }
        $this->pdo = null;

        return $stmt;
    }
    public function insertText($name, $text)
    {
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
