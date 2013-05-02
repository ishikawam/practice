<?php
require('pdo.php');
class RecordAjax
{
    public function getAjaxData()
    {
        error_log(__METHOD__.__LINE__);
        //json形式でうけとり
        $params = 
        //jsondecode
        $params = json_decode($params, true);
            
        $pdo = new Create_PDO;
        $data_list = $pdo->getAlltext($_POST['offset'], $_POST['limit']);
        echo json_encode($data_list);
        exit;
    }

}

$ajax = new RecordAjax;
$ajax->getAjaxData();
