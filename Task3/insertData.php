<?php
require_once('includes/DbConfig.inc.php');
$connectingDB;
    $dir = $_GET['dir'];
    $dis = $_GET['dis'];
    $sql="INSERT INTO cntroler2(distance,direction)
    VALUES(:dis,:dir)";
    $stmt = $connectingDB-> prepare($sql);
    $stmt->bindValue(':dis',$dis);
    $stmt->bindValue(':dir',$dir);
    $Execute = $stmt->execute();
    if($Execute){
        header("Location:".'index.php');
    } 
?>