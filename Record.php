<?php
require('pdo.php');
header("Content-Type: text/html; charset=utf-8");
class RecordAjax
{
    public function getAjaxData()
    {
            
        $pdo = new Create_PDO;
        $data_list = $pdo->getAlltext($_POST['offset'], $_POST['limit']);
        echo json_encode($data_list);
        exit;
    }

}

$ajax = new RecordAjax;
$ajax->getAjaxData();
