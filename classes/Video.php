<?php

class Video
{
    private $con,$data,$inp,$item;
    public function __construct($con,$inp)
    {
        $this->con = $con;
        $this->inp = $inp;
        
        if(is_array($inp))
        {
            $this->data = $inp;
        }else
        {
//            $query = $this->con->prepare("SELECT * FROM entities WHERE id=:id");
//            $query->bindValue(":id",intval($inp));
//            $query->execute();
      
           
                $query = $con->prepare("SELECT * FROM videos WHERE id=:itemid");
                $query->bindValue(":itemid",$inp);
                $query->execute();

            
                $this->data = $query->fetch(PDO::FETCH_ASSOC);
            
            
        }
        
        
        $this->item = new Item($con,$this->data['entityId']);
    }
    
    
    public function getId()
    {
        return $this->data['id'];
    } 
    
    public function getTitle()
    {
        return $this->data['title'] ;
    }
    
    public function getDescription()
    {
        return $this->data['description'];
    } 
    
    public function getFilePath()
    {
        return $this->data['filePath'];
    } 
    
    public function getThumbnail()
    {
        return $this->item->getThumbnail();
    }
    
    public function getEpisodeNumber()
    {
        return $this->data['episode'];
    } 
    
    public function getItemId()
    {
        return $this->data['entityId'];
    } 
    
    public function getSeasonNumber()
    {
        return $this->data['season'];
    } 
    
    public function incrementViews()
    {
       
        $query = $this->con->prepare("UPDATE videos SET views=views+1 where id=:id");
        
        $query->bindValue(":id",$this->getId());
        $query->execute();
    }
    
    
    public function SeasonAndEpisode()
    {
        if($this->isItAMovie())
        {
            return;
        }
        $season = $this->getSeasonNumber();
        $episode = $this->getEpisodeNumber();
        return "Season $season, Ep $episode";
    }
    
    public function isItAMovie()
    {
        return $this->data['isMovie'] == 1 ;
    }
    
    public function hasSeen($username)
    {
        $query = $this->con->prepare("SELECT * FROM vidProgress WHERE videoId=:videoId AND username=:username AND finished = 1");
        $query->bindValue(":videoId",$this->getId());
        $query->bindValue(":username",$username);
        $query->execute();
        
        return $query->rowCount() != 0;
    }
    

}


?>