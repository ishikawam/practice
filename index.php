<?php
require_once('smarty.php');
require_once('pdo.php');

$create_sm = new createSmarty;
$pdo = new Create_PDO();

$stmt = $pdo->getAlltext();

$create_sm->smarty->assign('data',$stmt);
$create_sm->smarty->display('index.tpl');



?>
