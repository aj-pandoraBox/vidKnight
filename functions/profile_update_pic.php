<?php
require_once("../connection/config.php");

$username = $_SESSION['userLoggedIn'];

if(isset($_FILES['imageProfile']))
{        

    $profImg = $_FILES['imageProfile']['name'];
    if($profImg != "")
    {
        $ext1 = pathinfo($profImg,PATHINFO_EXTENSION);
        $prof_array_ext = array("jpg","jpeg","png","gif");

        if(in_array($ext1,$prof_array_ext)){
            $us1 = str_replace(" ","_",$username);    
            $prof_new_name = $us1."_".rand() . "." . $ext1;
            $path1 = "../entities/profile_pic/".$prof_new_name;
            $path1d = "entities/profile_pic/".$prof_new_name;
            
    if(move_uploaded_file($_FILES['imageProfile']['tmp_name'],$path1)){
    
    }
            
     $query= $con->prepare("UPDATE users set pic='$path1d' where username='$username' ") ;
            $query->execute();
            if($query)
            {
                echo $path1d;
            }else
            {
                echo "connection error";
            }
            
            
            
        }else
        {
            echo $_POST['OldimageProfile'];
        }
        
    }
}


if(isset($_POST['desc_update']))
{
    $desc= $_POST['desc_update'];
    
    $query= $con->prepare("UPDATE users set description='$desc' where username='$username' ") ;
    $query->execute();
    if($query)
    {
                echo "description updated successfully";
    }else
    {
                echo "connection error";
    }
    
    
}

if(isset($_POST['price_update']))
{
    $price= $_POST['price_update'];
    
    $query= $con->prepare("UPDATE users set price='$price' where username='$username' ") ;
    $query->execute();
    if($query)
    {
                echo "price updated successfully";
    }else
    {
                echo "connection error";
    }
    
    
}

?>