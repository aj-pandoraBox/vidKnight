<?php
require_once("../connection/config.php");

if(isset($_POST['v1']))
{
    $movie = $_POST['v1'];
    $user= $_POST['userSearch'];
    

            $query2 = $con->prepare("SELECT DISTINCT(entities.id),thumbnail,name FROM `entities` INNER JOIN videos on videos.entityId = entities.id  WHERE type=1 and username='$user' and name LIKE'%$movie%'");
            $query2->execute();
            if($query2->rowCount() !=0)
            {
            while($row = $query2->fetch(PDO::FETCH_ASSOC))
            {
            $img = $row['thumbnail'];
            $id = $row['id'];
            $name = $row['name'];
            echo "

            <div class='profile-container-content-element'>
            <img src=$img onclick='openItemPage($id)'>
            <h5 onclick='openItemPage($id)'>$name</h5>
            </div>

            ";
            }
            }else
            {
                echo "<h4 class='not-found-message-search-profile'>no movie found...</h4>";
            }

    
    
}

if(isset($_POST['reMovie']))
{
        $user= $_POST['userSearch'];

     $query2 = $con->prepare("SELECT DISTINCT(entities.id),thumbnail,name FROM `entities` INNER JOIN videos on videos.entityId = entities.id  WHERE type=1 and username='$user'");
            $query2->execute();
            if($query2->rowCount() !=0)
            {
            while($row = $query2->fetch(PDO::FETCH_ASSOC))
            {
            $img = $row['thumbnail'];
            $id = $row['id'];
            $name = $row['name'];
            echo "

            <div class='profile-container-content-element'>
            <img src=$img onclick='openItemPage($id)'>
            <h5 onclick='openItemPage($id)'>$name</h5>
            </div>

            ";
            }
            }
}

if(isset($_POST['v2']))
{
    
    $tv_show = $_POST['v2'];

    $user= $_POST['userSearch'];
    

            $query2 = $con->prepare("SELECT DISTINCT(entities.id),thumbnail,name FROM `entities` INNER JOIN videos on videos.entityId = entities.id  WHERE type=0 and username='$user' and name LIKE'%$tv_show%'");
            $query2->execute();
            if($query2->rowCount() !=0)
            {
            while($row = $query2->fetch(PDO::FETCH_ASSOC))
            {
            $img = $row['thumbnail'];
            $id = $row['id'];
            $name = $row['name'];
            echo "

            <div class='profile-container-content-element'>
            <img src=$img onclick='openItemPage($id)'>
            <h5 onclick='openItemPage($id)'>$name</h5>
            </div>

            ";
            }
            }else
            {
                echo "<h4 class='not-found-message-search-profile'>no tv-show found...<h4>";
            }


    
    
}


if(isset($_POST['reShow']))
{
        $user= $_POST['userSearch'];

     $query2 = $con->prepare("SELECT DISTINCT(entities.id),thumbnail,name FROM `entities` INNER JOIN videos on videos.entityId = entities.id  WHERE type=0 and username='$user'");
            $query2->execute();
            if($query2->rowCount() !=0)
            {
            while($row = $query2->fetch(PDO::FETCH_ASSOC))
            {
            $img = $row['thumbnail'];
            $id = $row['id'];
            $name = $row['name'];
            echo "

            <div class='profile-container-content-element'>
            <img src=$img onclick='openItemPage($id)'>
            <h5 onclick='openItemPage($id)'>$name</h5>
            </div>

            ";
            }
            }
    
    
}



?>