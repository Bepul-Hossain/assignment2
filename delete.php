<?php
    require_once 'phpSql.php';

        $Id = $_GET['id'];
        echo $Id;
        $deleteStep = $pdo->prepare("DELETE FROM Info WHERE Id = $Id");
        $deleteStep->execute(); 
        header('Location:index.php');

?>