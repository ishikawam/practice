<?php
require_once('../pdo.php');

$_pdo = new Create_PDO;
echo('a');
for($i=0;$i < 100; $i++) {
    $format = "CREATE TABLE `user_response_%02d` (
        `id` smallint(6) NOT NULL AUTO_INCREMENT,
        `parent_id` smallint(6) NOT NULL DEFAULT '0',
        `title` varchar(255) NOT NULL DEFAULT '',
        `name` varchar(255) NOT NULL DEFAULT '',
        `body` varchar(255) NOT NULL DEFAULT '',
        `mtime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
        `ctime` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
        PRIMARY KEY (`id`)
    ) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=utf8mb4;";
    $sql = sprintf($format, $i);
    print($sql.'\n');
    $stmt = $_pdo->pdo->query($sql);
}

$_pdo->pdo = null;

