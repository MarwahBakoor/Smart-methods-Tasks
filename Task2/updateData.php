<?php
require_once('includes/DbConfig.inc.php');
$connectingDB;
    $dir = $_GET['dir'];
    $sql="INSERT INTO cntroler1(dir)
    VALUES(:dir)";
    $stmt = $connectingDB-> prepare($sql);
    $stmt->bindValue(':dir',$dir);
    $Execute = $stmt->execute();
    if($Execute){
        header("Location:".'index.php');
    } 
    

?>
