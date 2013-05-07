<?php
require_once('smarty.php');
require_once('pdo.php');


$create_sm = new createSmarty;
$pdo = new Create_PDO();
//$create_sm->smarty->assign('parent_id',$_POST['parent_id']);
$create_sm->smarty->display('response.tpl');



