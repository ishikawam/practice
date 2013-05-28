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
        $sql = sprintf('select * from `user_data` ORDER BY `mtime` DESC LIMIT %d, %d;', $offset, $limit);
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

    public function getAllresponse($parent_id)
    {
        $sql = sprintf('select * from `user_response_%02d`;', $parent_id%100);
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
    public function getTextById($parent_id)
    {
        $sql = sprintf('select * from `user_data` where id = %d;', $parent_id);
        try {
            $stmt = $this->pdo->query($sql);
            $data_list = $stmt->fetchAll();
        } catch(PDOException $e) {
            print('Error;'.$e->getMessage());
            die();
        }
        $this->pdo = null;
        return array_shift($data_list);
    }
    public function insertText($name, $title, $text)
    {
        $name = htmlspecialchars($name);
        $text = htmlspecialchars($text);
        $title = htmlspecialchars($title);
        $format = "INSERT INTO `user_data` (name, title, text, ctime) values('%s', '%s', '%s', %s);";
        $sql = sprintf($format, $name, $title, $text, time());
        error_log($sql);
        try {
            $stmt = $this->pdo->query($sql);
        } catch(PDOException $e) {
            print('Error:'.$e->getMessage());
            die();
        }
        $this->pdo = null;
        return $stmt;
    }
    public function insertTextRes($name, $text, $parent_id)
    {
        $name = htmlspecialchars($name);
        $text = htmlspecialchars($text);
        $table_name = sprintf("user_response_%2d", $parent_id);
        $format = "INSERT INTO `%s` (name, body, ctime) values('%s', '%s', %s);";
        $sql = sprintf($format, $table_name, $name, $text, time());
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
