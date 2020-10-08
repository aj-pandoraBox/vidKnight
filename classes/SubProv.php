<?php
require_once("../connection/config.php");

if(isset($_POST['getData']))
{    
$usern = $_POST['userFrom'];
$start = $_POST['start'];    
$limit = $_POST['limit'];    
    
$query = $con->prepare("SELECT userTo FROM subscribers where userFrom='$usern' ");

$query->execute();
        
$usertToarray = array();
        
        
array_push($usertToarray,$usern);

        
while($row=$query->fetch(PDO::FETCH_ASSOC))
        {

            array_push($usertToarray,$row['userTo']);
            
        }
        
        
        
$subsribed = $usertToarray;
        if(sizeof($subsribed) > 0)
        {
           
            $cond="";
            $i = 0;
            foreach($subsribed as $sub)
            {
                if($i==0)
                {
                    $cond = "WHERE entities.username = '$sub'";
                }else
                {
                    $cond .= "  OR entities.username = '$sub'";
                }
                
                $i=$i+1;
            }
            
            $sql = "SELECT entities.name,videos.description,entities.username,videos.season,videos.episode,entities.thumbnail,entities.type,videos.entityId,videos.id,videos.title FROM `entities` INNER JOIN videos on videos.entityId = entities.id $cond ORDER BY videos.id DESC LIMIT $start,$limit";
            
            
            $query = $con->prepare($sql);
            
//            $i = 1;
//            
//            foreach($subsribed as $sub)
//            {
//                $query->bindParam($i,$sub);
//                $i++;
//            }
            
            $query->execute();
            
        if($query->rowCount() == 0)
        {
            echo "max";
            return;
        }
            
          
           while($row=$query->fetch(PDO::FETCH_ASSOC))
           {
               $id=$row['entityId'];
               $videoId=$row['id'];
               $thumb = $row['thumbnail'];
               $name = $row['name'];
               $desc = $row['description'];
               $title = $row['title'];
               $userfrom = $row['username'];
               $season = $row['season'];
               $episode = $row['episode'];
               $type = $row['type']==0?"<ion-icon name='tv-sharp'></ion-icon>" : "<ion-icon name='videocam-sharp'></ion-icon>";
               
               echo "<div class='home-user-box-container'>
        <h6>$type</h6>
        <img src=$thumb onclick='Peview_Clicked_Image($id)'>
        <h2 onclick='Peview_Clicked_Image($id)'>$title</h2>
        <h7 onclick='watch_video($videoId)''>Season $season Episode $episode</h7>
        <h4>$name</h4>
        <h5 onclick='go_profile_page(\"$userfrom\")'>by $userfrom</h5>
        
        
            </div>";
               
           }
            
//            echo $sql;
        }
}
?>