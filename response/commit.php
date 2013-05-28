<?php
    require_once('../pdo.php');
    $pdo = new Create_PDO;
    $affected = $pdo->insertTextRes($_POST['name'], $_POST['text'], $_POST['parent_id']);
    $location = sprintf('Location: response.php?parent_id=%d', $_POST['parent_id']);
    header($location);
    exit;
