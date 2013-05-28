<?php
require_once('pdo.php');
require_once('util.php');
$pdo = new Create_PDO;

if (!isset($_COOKIE['cookie_post'])) {
    if (empty($_POST['name'])) {
        $_POST['name'] = '名無しのうさぎちゃん';
    }
    if (empty($_POST['title'])) {
        $_POST['title'] = '無題';
    }
    $affected = $pdo->insertText($_POST['name'], $_POST['title'], $_POST['text']);
    // もうダメだクッキーに仕込もう。。。
    $expire = time() + 60;
    $value = "true";
    setcookie('cookie_post', $value, $expire);
    header("Location: index.php");
    exit;
} else{
    header("Location: no.html");
    exit;
}
