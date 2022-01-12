<?php
     require_once 'config.php';
     //$myPDO = new PDO('mysql:host=localhost;dbname=AssignmentPDO', 'root', '');
    try{
    $pdo = new PDO("mysql:host=$host;dbname=$dbname",$username,$password);
    $sql = 'SELECT Id, Title, Author, Available, Pages, ISBN FROM Info';
    
    $q = $pdo->query($sql);
  
    $q->setFetchMode(PDO::FETCH_ASSOC);
    // echo "$dbname connect";
    }catch(PDOException $err){
        die("failed $dbname: ".$err->getMessage());
    }
?>