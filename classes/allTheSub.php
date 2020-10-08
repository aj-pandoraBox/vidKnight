<?php
$query=$con->prepare("SELECT * FROM subscribers INNER JOIN users ON subscribers.userTo = users.username where subscribers.userFrom=:user");
$username=$_SESSION['userLoggedIn'];
$query->bindValue(":user",$username);
$query->execute();

if($query->rowCount() > 0)
{    


?>
       

       
       <div class="subscibedToChannelList-Container">

       
       <?php
    while($row=$query->fetch(PDO::FETCH_ASSOC))
    {
    $pic=$row['pic'];
    $userOfItem=$row['username'];
    echo " <div class='subscibedToChannelList' onclick='go_profile_page(\"$userOfItem\")' title=$userOfItem>
            <img src=$pic>
           <!-- <h5>$userOfItem</h5> -->
        </div> ";
        
    
    }
    echo "</div>";
    
    echo " <h6 style='margin-left:40px;color:#fff;font-size:20px;margin-top:60px;'>ALL The Latest Videos</h6>";
}


    
    ?>
    
   