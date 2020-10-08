<?php
$query1 = $con->prepare("SELECT DISTINCT(categoryId) FROM `entities` WHERE username='$user_profile'");
$query1->execute();
$categoryCount = $query1->rowCount();
    
$query2 = $con->prepare("SELECT * FROM `entities` WHERE type=1 and username='$user_profile'");
$query2->execute();
$movieCount = $query2->rowCount();
    
$query3 = $con->prepare("SELECT * FROM `entities` WHERE type=0 and username='$user_profile'");
$query3->execute();
$tvShowCount = $query3->rowCount();

$userLogged=$_SESSION['userLoggedIn'];
$query4 = $con->prepare("SELECT * FROM `subscribers` WHERE  userTo='$user_profile'");
$query4->execute();
$subCountFrom = $query4->rowCount();


$userLogged=$_SESSION['userLoggedIn'];
$query5 = $con->prepare("SELECT * FROM `subscribers` WHERE  userFrom='$user_profile'");
$query5->execute();
$subCountTo = $query5->rowCount();
    
echo " <div class='profile-info-container'>
     <div class='profile-info-container-elements'>
         <h4>Tv-shows</h4>
         <p>$tvShowCount</p>
     </div>
        
    <div class='profile-info-container-elements'>
         <h4>Movies</h4>
         <p>$movieCount</p>
     </div> 
        
    <div class='profile-info-container-elements'>
         <h4>Subscribers</h4>
         <p class='subCounter'>$subCountFrom</p>
     </div>
     
     <div class='profile-info-container-elements'>
         <h4>Subscribed</h4>
         <p class='subCounterTo'>$subCountTo</p>
     </div>
     
        
    <div class='profile-info-container-elements'>
         <h4>Categroies</h4>
         <p>$categoryCount</p>
     </div>
     
     

     
     
 </div>";


?>
    
  

 
   