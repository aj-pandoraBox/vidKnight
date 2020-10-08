<?php

class VideoProvide{
    
    public static function getItemForUser($con,$itemId,$username)
    {
        $query = $con->prepare("SELECT videoId FROM `vidProgress` INNER JOIN videos
ON vidProgress.videoId = videos.id WHERE videos.entityId = :itemId AND vidProgress.username = :username ORDER BY vidProgress.dateModified DESC LIMIT 1");
        
        $query->bindValue(":itemId",$itemId);
        $query->bindValue(":username",$username);
        $query->execute();
        
        if($query->rowCount() == 0)
        {
             $query = $con->prepare("SELECT id FROM videos where entityId = :itemId ORDER BY season,episode ASC LIMIT 1");
            $query->bindValue(":itemId",$itemId);
                    $query->execute();

        }
        
        return $query->fetchColumn();
        
    }
    
}

?>