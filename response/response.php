<?php
require_once('../smarty.php');
require_once('../pdo.php');


$create_sm = new createSmarty;
$pdo = new Create_PDO();
//渡ってきた親ページのidをとる
$parent_id = $_GET['parent_id'];
//親ページのないようだす
$parent_content = $pdo->getTextById($parent_id);
//親ページのidをkeyにして子ページのテーブルけっていして
$pdo = new Create_PDO();
$all_response_data = $pdo->getAllResponse($parent_id);

$create_sm->smarty->assign('parent_content',$parent_content);
$create_sm->smarty->assign('all_response_data',$all_response_data);
$create_sm->smarty->display('response.tpl');



