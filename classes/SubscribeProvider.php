
<?php
//class SubscribeProvider
//{
//    private $con,$user;
//    public function __construct($con,$user)
//    {
//        $this->con=$con;
//        $this->user=$user;
//        print_r($this->make());
//    }
//    
//    private function getSubscribedTo()
//    {
//        $query =$this->con->prepare("SELECT userTo FROM subscribers where userFrom='$this->user' ");
//        $query->execute();
//        $usertToarray = array();
//        
//        array_push($usertToarray,$this->user);
//
//        while($row=$query->fetch(PDO::FETCH_ASSOC))
//        {
//
//            array_push($usertToarray,$row['userTo']);
//            
//        }
//        
//        
//        
//        return $usertToarray;
//    } 
//    
//    private function make()
//    {
//        $subsribed = $this->getSubscribedTo();
//        if(sizeof($subsribed) > 0)
//        {
//           
//            $cond="";
//            $i = 0;
//            foreach($subsribed as $sub)
//            {
//                if($i==0)
//                {
//                    $cond = "WHERE entities.username = '$sub'";
//                }else
//                {
//                    $cond .= "  OR entities.username = '$sub'";
//                }
//                
//                $i=$i+1;
//            }
//            
//            $sql = "SELECT entities.id,entities.name,videos.description,entities.username,videos.season,videos.episode,entities.thumbnail FROM `entities` INNER JOIN videos on videos.entityId = entities.id $cond ORDER BY videos.id DESC LIMIT 20";
//            
//            
//            $query = $this->con->prepare($sql);
// 
//            
//            $query->execute();
//            
//           while($row=$query->fetch(PDO::FETCH_ASSOC))
//           {
//               $id=$row['id'];
//               $thumb = $row['thumbnail'];
//               $name = $row['name'];
//               $desc = $row['description'];
//               $userfrom = $row['username'];
//               $season = $row['season'];
//               $episode = $row['episode'];
//               
//               echo "<div class='home-user-box-container'>
//        <h6><ion-icon name='tv-sharp'></ion-icon></h6>
//        <img src=$thumb onclick='Peview_Clicked_Image($id)'>
//        <h2 onclick='Peview_Clicked_Image($id)'>$name</h2>
//        <h7>Season $season Episode $episode</h7>
//        <h4>$desc</h4>
//        <h5>by $userfrom</h5>
//        
//        
//            </div>";
//               
//           }
//            
//            
//        }
//    }
//    
//}

?>
