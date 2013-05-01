<?php
    require_once('pdo.php');
    $pdo = new Create_PDO;
    $affected = $pdo->insertText($_POST['name'], $_POST['text']);
    header("Location: index.php");
    exit;
