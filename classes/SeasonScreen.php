<?php

class SeasonScreen{
    
     
    private $con,$username;
    
    
    public function __construct($con,$username)
    {
        $this->con = $con;
        $this->username = $username;
        
        
    }
    
    
    public function createSeasons($item)
    {
       $seasons = $item->getSeasons();
        
        if(sizeof($seasons) == 0)
        {
            return;
        }
        
        $seasonHtml = "<div class='episode-container' style='clear:both;'>";
        foreach($seasons as $season)
        {
            $seasonNumber = $season->getSeasonNumber();
            
            $videoHtml = "";
            foreach($season->getVideos() as $video)
            {
                $videoHtml.= $this->createSeasonVideoBox($video);
            }
            
            
             $seasonHtml .= "
                    <div class='season'>
                            <h3>Season $seasonNumber</h3>
                        <div class='videos-episode-preview'>$videoHtml</div>
                    
                    </div>
             
             
             ";
        }
        
        $seasonHtml.="</div>";
        return $seasonHtml;
    }
    
    private function createSeasonVideoBox($video)
    {
        $id = $video->getId();
        $title = $video->getTitle();
        $thumbnail = $video->getThumbnail();
        $description = $video->getDescription();
        $episodeNumber = $video->getEpisodeNumber();
        $hasSeen = $video->hasSeen($this->username)? "<span style='color:#448ece;font-size:20px;margin-left:10px;'>&#10003;</span>" : "";
        
        return "<div class='sec'><div class='episodeCont'>
        <img src = '$thumbnail' id='$id' onclick='Peview_Clicked_Video(this.id)'> 
                

        </div>
        <div class='vidInfo'>
        <h4>Ep$episodeNumber, $title $hasSeen</h4>
        <p>$description</p>
        </div></div>
        ";
            
    }
    
    
}

?>