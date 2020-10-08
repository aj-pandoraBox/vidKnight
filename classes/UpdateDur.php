<?php
require_once("../connection/config.php");
if(isset($_POST['videoId']) && isset($_POST['username']) && isset($_POST['progress']))
{
   $videoId = $_POST['videoId'];
    $username = $_POST['username'];
    $progress = $_POST['progress'];
    
    $query = $con->prepare("UPDATE vidProgress SET progress=:progress, dateModified=NOW() where videoId=:videoId AND username=:username ");
    $query->bindValue(":progress",$progress);
    $query->bindValue(":videoId",$videoId);
    $query->bindValue(":username",$username);
    $query->execute();
 

}


?>