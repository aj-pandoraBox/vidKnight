<?php
class categoryContain{
    
    private $con,$username;
    
    
    public function __construct($con,$username)
    {
        $this->con = $con;
        $this->username = $username;
        
        
    }
    
    
    public function showAllCategories()
    {
//        $query = $this->con->prepare("SELECT * FROM categories LIMIT 15");
//        $query->execute();
//        
//        $html = "<div class='prevCategory'>
//                    
//                <div class='category_links'>    
//                
//        ";
//        
//       
//        
//        while($row=$query->fetch(PDO::FETCH_ASSOC))
//        {
//            $html.= $this->getCategoryHtml($row,null,true,true);
//        }
//        
//        
//        return $html . "</div>"; 
        
        $query = $this->con->prepare("SELECT * FROM categories LIMIT 15");
        $query->execute();
        
        $html = "";
        
       
        
        while($row=$query->fetch(PDO::FETCH_ASSOC))
        {
            $html.= $this->getCategoryHtml($row,null,true,true);
        }
        
        
        return $html;
    }
    
    
    public function showTvCategories()
    {        
        $query = $this->con->prepare("SELECT * FROM categories LIMIT 15");
        $query->execute();
        
        $html = "";
        
       
        
        while($row=$query->fetch(PDO::FETCH_ASSOC))
        {
            $html.= $this->getCategoryHtml($row,null,true,false);
        }
        
        
        return $html;
    } 
    
    public function showMovieCategories()
    {        
        $query = $this->con->prepare("SELECT * FROM categories LIMIT 50");
        $query->execute();
        
        $html = "";
        
       
        
        while($row=$query->fetch(PDO::FETCH_ASSOC))
        {
            $html.= $this->getCategoryHtml($row,null,false,true);
        }
        
        
        return $html;
    }
    
    
    public function getCategoryHtml($data,$title,$tvShow,$movie)
    {
        $catId = $data['id'];
        $title= $title==null ?  $data['name'] : $title;
        
        
        if($tvShow && $movie)
        {
            $items = ItemProvider::getItem($this->con,$catId,10);
        }
        else if($tvShow)
        {
            $items = ItemProvider::getTvShowItem($this->con,$catId,10);

        }else{
             $items = ItemProvider::getMovieItem($this->con,$catId,50);

        }
        
        
        if(sizeof($items) == 0)
        {
            return;
        }
        
        $itemHtml = "";
        
        $preview_screen = new Preview_Screen($this->con,$this->username);
        
        foreach($items as $item)
        {
            $itemHtml.=$preview_screen->ItemPreviewBox($item);
        }
        
        $html = "
        <div class='cat-container-box'>
        <h3>$title</h3>
            $itemHtml
         </div> 
         
        
        ";
        
        return $html;
        
        
       
        
    }
    
}