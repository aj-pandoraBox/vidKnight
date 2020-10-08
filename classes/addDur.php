<?php
require_once("../connection/config.php");
if(isset($_POST['videoId']) && isset($_POST['username']))
{
   $videoId = $_POST['videoId'];
    $username = $_POST['username'];
    
    $query = $con->prepare("SELECT * FROM vidProgress where videoId=:videoId AND username=:username ");
    $query->bindValue(":videoId",$videoId);
    $query->bindValue(":username",$username);
    $query->execute();
    
    
    if($query->rowCount() == 0)
    {
        $query = $con->prepare("INSERT INTO vidProgress(videoId,username) VALUES(:videoId,:username)");
        $query->bindValue(":videoId",$videoId);
    $query->bindValue(":username",$username);
            $query->execute();

    }else{
        
         $query = $con->prepare("UPDATE vidProgress SET  dateModified=NOW() where videoId=:videoId AND username=:username ");
    $query->bindValue(":videoId",$videoId);
    $query->bindValue(":username",$username);
    $query->execute();
        
    }

}


?>