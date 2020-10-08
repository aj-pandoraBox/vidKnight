<?php
require_once("../connection/config.php");

if(isset($_POST['c2']) && isset($_POST['v']) )
{
    if($_POST['c2'] == '3' || $_POST['v'] != '')
    {
    
    $c2 = $_POST['c2'];
    $v = $_POST['v'];
    
    if($v != "" || $c2 != 0 )
    {
    $sql = "SELECT  * FROM users where username LIKE '%$v%' LIMIT 10";
    
    $query = $con->prepare($sql);
    $query->execute();
    
    $st ="";
    while($row = $query->fetch(PDO::FETCH_ASSOC))
    {
        $id = $row['id'];
        $name = $row['username'];
        $desc = $row['description'];
        $pic = $row['pic'];
        if(strlen($desc)>=40)
        {
        $desc = substr($desc,0,40);
        $desc = $desc."...";
        }   
        
       $st.= " <div class='box-contain-search-channel'>
        
        <img src=$pic onclick='Peview_Search_Profile(\"$name\")'>
        <h4 onclick='Peview_Search_Profile(\"$name\")'>$name</h4>
        <p>$desc</p>
        </div>  
        
        ";
        
    }
    
    if($query->rowCount() == 0)
    {
        echo "<h3 style='color:#fff;margin-top:30px;font-size:35px;font-weight:300;'>No User Found..</h3>";
    }
    echo $st;
    }
    }else
    {
        echo '';
    }
}

?>