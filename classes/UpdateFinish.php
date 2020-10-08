<?php
require_once("../connection/config.php");
if(isset($_POST['videoId']) && isset($_POST['username']))
{
  $videoId = $_POST['videoId'];
    $username = $_POST['username'];
    
    
    $query = $con->prepare("UPDATE vidProgress SET progress=0 , finished=1 where videoId=:videoId AND username=:username ");
    $query->bindValue(":videoId",$videoId);
    $query->bindValue(":username",$username);
    $query->execute();
}


?>