<?php
require_once("../connection/config.php");

$username=$_SESSION['userLoggedIn'];
$query=$con->prepare("select * from users where username=:user");
$query->bindValue(":user",$username);
$query->execute();
$row=$query->fetch(PDO::FETCH_ASSOC);
$userId= $row['id'];


if(isset($_POST['review'])){
    
    $review=$_POST['review'];
    $itemId=$_POST['itemId'];
    $query=$con->prepare("select * from review where userIdFrom=$userId and entityId=$itemId");
    $query->execute();
    if($query->rowCount()>0){
       $query=$con->prepare("update review set review=:review where userIdFrom=$userId and entityId=$itemId");
      
       $query->bindValue(":review",$review);

     $query->execute();
        
        echo "updated";
        
    }else{
        
     $query=$con->prepare("insert into review(entityId,userIdFrom,review) values(:entityid,:userId,:review)");
       $query->bindValue(":entityid",$itemId);
       $query->bindValue(":userId",$userId);
       $query->bindValue(":review",$review);

     $query->execute();
        
        echo "posted";
        
        
    }
    

}


if(isset($_POST['load']))
{
        $itemId=$_POST['itemId'];

    $query=$con->prepare("select review.id,review,username,pic from review INNER JOIN users on users.id=review.userIdFrom WHERE review.entityId=$itemId ORDER BY review.id DESC");
    

    $query->execute();
    
    while($row=$query->fetch(PDO::FETCH_ASSOC))
    {
        $pic =  $row['pic'];
        $username =  $row['username'];
        $review =  $row['review'];
        
        echo "  <div class='reviews-profile'>
           <img src=$pic>
            <h2>$username</h2>
            <p>$review</p>
            
        </div> ";
    }
    
    
}



if(isset($_POST['delete']))
{
        $itemId=$_POST['itemId'];

    
    $query=$con->prepare("DELETE FROM review WHERE userIdFrom=:userId and entityId=:entityid ");
       $query->bindValue(":entityid",$itemId);
       $query->bindValue(":userId",$userId);

     $query->execute();
    
    echo "deleted";
}

?>