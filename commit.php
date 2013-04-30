<?php
$host = 'mysql423.db.sakura.ne.jp';
$user_name = 'supermanner';
$password = 'ERO0pK68';
$use_database = 'supermanner_board';

$conn = mysql_connect($host, $user_name, $password)or die('mysql connect error');
$sdb = mysql_select_db($use_database ,$conn) or die('lost database');
$format = "INSERT INTO `user_data` (name, text) values('%s', '%s');";
$sql = sprintf($format, $_POST['name'], $_POST['text']);
var_dump($sql);
var_dump($conn);
$result = mysql_query($sql) or die('not get');
$rows = mysql_num_rows($result);
 mysql_free_result($rows);
 mysql_close($conn) or die("MySQL切断に失敗しました。");   


