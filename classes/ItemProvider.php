<?php
class ItemProvider{
    
    public static function getItem($con,$categoryId,$Limit)
    {
        
//        $sql="SELECT DISTINCT(entities.id),entities.name,entities.thumbnail,entities.preview,entities.description,entities.username,views FROM entities INNER JOIN videos ON entities.id=videos.entityId WHERE videos.uploadDate >= (DATE(NOW()) - INTERVAL 30 DAY) ORDER BY videos.views DESC ";
        
        $sql = "SELECT DISTINCT(entities.id),entities.name,entities.thumbnail,entities.preview,entities.description,entities.username FROM entities INNER JOIN videos ON entities.id=videos.entityId ";
        if($categoryId != null)
        {
            $sql.= "WHERE entities.categoryId=:categoryId ";
        }
        
        $sql.= "ORDER BY RAND() LIMIT :limit";

        
        $query = $con->prepare($sql);
        
        if($categoryId != null)
        {
            $query->bindValue(":categoryId",$categoryId);
        }
        
           $query->bindValue(":limit",$Limit, PDO::PARAM_INT);
        
         
        
        $query->execute();
        
        $result = array();
        
        while($row = $query->fetch(PDO::FETCH_ASSOC)){
            $result[] = new Item($con,$row);
            
        }
        
        return $result;
        
    }
    
    
    public static function getTvShowItem($con,$categoryId,$Limit)
    {
        
        $sql = "SELECT DISTINCT(entities.id) FROM `entities`
        INNER JOIN videos ON entities.id = videos.entityId
        WHERE videos.isMovie = 0 ";
        if($categoryId != null)
        {
            $sql.= "AND categoryId=:categoryId ";
        }
        
        $sql.= "ORDER BY RAND() LIMIT :limit";

        
        $query = $con->prepare($sql);
        
        if($categoryId != null)
        {
            $query->bindValue(":categoryId",$categoryId);
        }
        
           $query->bindValue(":limit",$Limit, PDO::PARAM_INT);
        
         
        
        $query->execute();
        
        $result = array();
        
        while($row = $query->fetch(PDO::FETCH_ASSOC)){
            $result[] = new Item($con,$row['id']);
            
        }
        
        return $result;
        
    }
    
    
     public static function getMovieItem($con,$categoryId,$Limit)
    {
        
        $sql = "SELECT DISTINCT(entities.id) FROM `entities`
        INNER JOIN videos ON entities.id = videos.entityId
        WHERE videos.isMovie = 1 ";
        if($categoryId != null)
        {
            $sql.= "AND categoryId=:categoryId ";
        }
        
        $sql.= "ORDER BY RAND() LIMIT :limit";

        
        $query = $con->prepare($sql);
        
        if($categoryId != null)
        {
            $query->bindValue(":categoryId",$categoryId);
        }
        
           $query->bindValue(":limit",$Limit, PDO::PARAM_INT);
        
         
        
        $query->execute();
        
        $result = array();
        
        while($row = $query->fetch(PDO::FETCH_ASSOC)){
            $result[] = new Item($con,$row['id']);
            
        }
        
        return $result;
        
    }
    
    
    
    
    
}


?>