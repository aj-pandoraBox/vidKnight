<?php
require_once("../connection/config.php");
if(isset($_POST['videoId']) && isset($_POST['username']))
{
  $videoId = $_POST['videoId'];
    $username = $_POST['username'];
    
    
    $query = $con->prepare("SELECT progress FROM vidProgress where videoId=:videoId AND username=:username ");
    $query->bindValue(":videoId",$videoId);
    $query->bindValue(":username",$username);
     $query->execute();
    echo  $query->fetchColumn();
    
    
    
}


?>