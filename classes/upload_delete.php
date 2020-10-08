<?php
require_once("../connection/config.php");


if(isset($_POST['movie']))
{
     $id= $_POST['entityId'];
    $query = $con->prepare("SELECT season,episode,thumbnail,videos.id,videos.entityId,name,title FROM videos INNER JOIN entities ON videos.entityId=entities.id where entityId=$id ORDER BY season ASC,episode ASC");
    $query->execute();
    
    $current;
    $s = 1;
    
    echo "  <div class='load-delete-contents'>

            <div class='load-delete-elements'>
            <h7>Movie</h7>    
            </div>";
    
    while($row=$query->fetch(PDO::FETCH_ASSOC))
    {
        $current = $row['season'];
        $id = $row['id'];
        $eid = $row['entityId'];
        $episode = $row['episode'];
        $thumbnail = $row['thumbnail'];
        $title = $row['title'];

        
        if(strval($s) != $current)
        {
            
            echo "</div>";
            $s+=1;
            
            echo "<div class='load-delete-contents'>

            <div class='load-delete-elements'>
            <h7>Season $current</h7>    
            </div>";
            
        }else{
            
            echo " <div class='load-delete-content-element'>
            <img src=$thumbnail >
            <h4>$title</h4>
            <p>movie</p>
            <button onclick='del_content_movie($id)'>Delete</button>
            </div> ";
        }
        
        
    }
    echo "</div>";
    
    
    
}



if(isset($_POST['tv']) )
{
    $id= $_POST['entityId'];
    $query = $con->prepare("SELECT season,episode,thumbnail,videos.id,videos.entityId,name,title FROM videos INNER JOIN entities ON videos.entityId=entities.id where entityId=$id ORDER BY season ASC,episode ASC");
    $query->execute();
    
    $current;
    $s = 1;
    
    echo "  <div class='load-delete-contents'>

            <div class='load-delete-elements'>
            <h7>Season 1</h7>    
            </div>";
    
    while($row=$query->fetch(PDO::FETCH_ASSOC))
    {
        $current = $row['season'];
        $id = $row['id'];
        $episode = $row['episode'];
        $thumbnail = $row['thumbnail'];
        $title = $row['title'];

        if(strval($s) != $current)
        {
            
            echo "</div>";
            $s+=1;
            
            echo "<div class='load-delete-contents'>

            <div class='load-delete-elements'>
            <h7>Season $current</h7>    
            </div>
            <div class='load-delete-content-element'>
            <img src=$thumbnail >
            <h4>$title</h4>
            <p>Season $current Ep $episode</p>
            <button onclick='del_content_show($id)'>Delete</button>
            </div> 
            
            ";
            
        }else{
            
            echo " <div class='load-delete-content-element'>
            <img src=$thumbnail >
            <h4>$title</h4>
            <p>Season $current Ep $episode</p>
            <button onclick='del_content_show($id)'>Delete</button>
            </div> ";
        }
        
        
    

           



            

        
        
        
    }
    echo "</div>";
    
    
}


if(isset($_POST['delIdVideo']))
{
    $delIdVideo=$_POST['delIdVideo'];
    $query = $con->prepare("DELETE FROM videos where id=$delIdVideo");
    $query->execute();
    
  
    
    
    
}

if(isset($_POST['delIdEnity']))
{
    $id = $_POST['delIdEnity'];
    $query = $con->prepare("DELETE FROM videos where entityId=$id");
    $query->execute();
    
    $query = $con->prepare("DELETE FROM review where review.entityId=$id");
    $query->execute();
    
    
    $query = $con->prepare("DELETE FROM entities where id=$id");
    $query->execute();
    
    
    echo "DELETE FROM entities where id=$id";
    
}


?>