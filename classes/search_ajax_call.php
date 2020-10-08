<?php
require_once("../connection/config.php");

if(isset($_POST['c1']) && isset($_POST['c2']) && isset($_POST['v']) )
{
    
    
    $c1 = $_POST['c1'];
    $c2 = $_POST['c2'];
    $v = $_POST['v'];
    
    if($v != "" || $c1 != 0 || $c2 != 0 )
    {
    $sql = "SELECT DISTINCT(entities.name), entities.thumbnail ,entities.preview , entities.description , entities.id,entities.username FROM `entities` INNER JOIN videos ON entities.id = videos.entityId where ";
    
    if($c1 != '0')
    {
        $sql .= "entities.categoryId = $c1 and ";
        
    }
    
    if($c2 == '1')
    {
        $sql .=  "videos.isMovie = 0 and ";
    }
     
    if($c2 == '2')
    {
        $sql .=  "videos.isMovie = 1 and ";
    }
    
    $sql .= " entities.name LIKE '%$v%' LIMIT 10";
    
    $query = $con->prepare($sql);
    $query->execute();
    
    $st ="";
    while($row = $query->fetch(PDO::FETCH_ASSOC))
    {
        $id = $row['id'];
        $name = $row['name'];
        $desc = $row['description'];
        $thumbnail = $row['thumbnail'];
        $user = $row['username'];
        if(strlen($desc)>=70)
        {
        $desc = substr($desc,0,70);
        $desc = $desc."...";
        }   
        
       $st.= " <div class='box-contain-search'>
        
        <img src=$thumbnail onclick='Peview_Search_Item($id)'>
        <h4 onclick='Peview_Search_Item($id)'>$name</h4>
        <p>$desc</p>
        <p class='user-account-cat-box' onclick='go_profile_page(\"$user\")'>by $user</p>
        </div>  
        
        ";
        
    }
    
    if($query->rowCount() == 0)
    {
        echo "<h3 style='color:#fff;margin-top:30px;font-size:35px;font-weight:300;'>No Videos Found..</h3>";
    }
    echo $st;
    }
}

?>