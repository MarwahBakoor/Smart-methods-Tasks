<?php 
require_once('includes/DbConfig.inc.php');
$connectingDB;
$sql = "DELETE FROM cntroler2 WHERE ID=(SELECT MAX(id) FROM cntroler2)";
$Execute = $connectingDB->query($sql);
if($Execute){
    header("Location:".'index.php');
    exit;
} 

?>