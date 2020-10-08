<?php
require_once("VideoProvide.php");  

class Preview_Screen{
    
    private $con,$username;
    public function __construct($con,$username)
    {
        $this->con = $con;
        $this->username = $username;
        
        
    }
    
   
    
    
    
    
     public function create_previewTest($view)
    {
        if($view == null)
        {
        $item =  $this->generate_random_view();
        
        }else{
            $item=$view;
        }
        
        
       $id= $item->getId();
       $name= $item->getName();
       $thumbnail= $item->getThumbnail();
       $preview= $item->getPreview();
       $desc= $item->getDescription();
       $user= $item->getUser();
        
       $videoId = VideoProvide::getItemForUser($this->con,$id,$this->username);
        $video = new Video($this->con,$videoId);
        $seasonandepisdoe = $video->SeasonAndEpisode();
        $seasonText = $video->isItAMovie()? "Movie"  : "<span>$seasonandepisdoe<span>";
        $desc2=$desc;
       if(strlen($desc)>=60)
       {
           $desc2 = substr($desc,0,60);
           $desc2 = "<span id='lessdesc'>".$desc2."<span id='desc2' style='color:#0B84FF;cursor:pointer;'> show more</span></span><span id='moredesc' style='display:none'>".$desc."<span id='desc1'style='color:#0B84FF;cursor:pointer;'> show less</span></span>";
       }
         
        
        
         if($seasonText == "Movie")
    {
        echo "<style>
        
        .video-preview-item-full-container{
        height:100%;
        }
        </style>";
    } 
         
        
          return "
          
          <div class='video-preview-item-full-container'>
        <button class='review-btn-item' onclick='popUpReviewsShow()'>See the Reviews</button>
        <video autoplay muted controls style='display:none;' onended='preview_the_video()'>
            
            <source src=$preview type='video/mp4'>
            
        </video>
        <img src=$thumbnail>
        
        <div class='video-preview-item-full-subTitles'>
            <h4>$seasonText</h4>

            <h3>$name</h3>
          

            <p>$desc2</p>
            <p class='user-account-subTitle' onclick='go_profile_page(\"$user\")'>by $user</p>
            
            <div class='video-preview-item-full-buttons-contain'>
                
                <button class='watch-btn-play' onclick='watch_video($videoId)'>Play</button>
                <button class='preview-btn-play' onclick='preview_the_video()' id='preview_button'>Preview</button>
                
            </div>
            
        </div>
        
        
        
    </div>
        
      <script>
      
      $('#desc2').on('click',function(){
      
      $('#lessdesc').toggle();
      $('#moredesc').toggle();
      
      
      });
      
      $('#desc1').on('click',function(){
      
      $('#lessdesc').toggle();
      $('#moredesc').toggle();
      
      
      });
      
      </script>
        
        ";  
         
   
       
    }
    
    
    
    
    
    
    public function ItemPreviewBox($item)
    {
       $id= $item->getId();
       $name= $item->getName();
       $thumbnail= $item->getThumbnail();
       $preview= $item->getPreview();
       $desc= $item->getDescription();
       $user= $item->getUser();
        
        
        
        $videoId = VideoProvide::getItemForUser($this->con,$id,$this->username);
        $video = new Video($this->con,$videoId);
        $seasonandepisdoe = $video->SeasonAndEpisode();
        $seasonText = $video->isItAMovie()? "Movie"  : "<span>$seasonandepisdoe<span>";    
            
        $movieOrShow =   $seasonText == "Movie" ? "<ion-icon name='videocam-sharp'></ion-icon>" : "<ion-icon name='tv-sharp'></ion-icon>";      
        
        if(strlen($desc)>=100)
        {
        $desc = substr($desc,0,100);
        $desc = $desc."...";
        }        

        return "
        
        <div class='cat-box-info' >
        <h6> $movieOrShow</h6>
                <img src=$thumbnail  id='$id' onclick='Peview_Clicked_Image(this.id)'>
            <h4>$name</h4>
             <p>$desc</p>
             <p class='user-account-cat-box' onclick='go_profile_page(\"$user\")'>by $user</p>
        </div>
        
        ";
    }
    

   
    
    
    public function ItemSuggestionBox($limit)
    {
        
        $items = ItemProvider::getItem($this->con,null,$limit);
        $html="";
        foreach($items as $item)
        {
        
       $id= $item->getId();
       $name= $item->getName();
       $thumbnail= $item->getThumbnail();
       $preview= $item->getPreview();
       $desc= $item->getDescription();
       $user= $item->getUser();

        
        $videoId = VideoProvide::getItemForUser($this->con,$id,$this->username);
        $video = new Video($this->con,$videoId);
        $seasonandepisdoe = $video->SeasonAndEpisode();
        $seasonText = $video->isItAMovie()? "Movie"  : "<span>$seasonandepisdoe<span>";    
            
        $movieOrShow =   $seasonText == "Movie" ? "Movie" : "Tv-show";  
            
        if(strlen($desc)>=100)
        {
        $desc = substr($desc,0,100);
        $desc = $desc."...";
        }        

        $html .= " <div class='suggestion-div-box-home'>
        
                    <div class='suggestion-div-box-home-element'>
                <h6 onclick='go_profile_page(\"$user\")'>Trending $movieOrShow by $user</h6>
                <h4 onclick='Peview_Clicked_Image($id)'>$name</h4>
                <p>$desc</p>
                <img src=$thumbnail id='$id' onclick='Peview_Clicked_Image(this.id)'>
        
        
        </div>
        </div>";
        }
        
            
        
        
        return $html;
    }
    
    private function generate_random_view()
    {
       $item = ItemProvider::getItem($this->con,null,1);
        return  $item[0];
            
    }
    
    
    
}


?>