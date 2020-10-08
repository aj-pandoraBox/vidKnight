<?php
require_once("../connection/config.php");


    $username = $_POST['username'];
    $title = $_POST['title-name-create'];
    $desc = $_POST['desc-create'];
    $thumbailFileName = $_FILES['file-upload-thumbnail']['name'];
    $PreviewFileName = $_FILES['file-upload-preview']['name'];
    $type = $_POST['type-create'];
    $category = $_POST['cat-create'];

    
    $ext1 = pathinfo($thumbailFileName,PATHINFO_EXTENSION);
    $ext2 = pathinfo($PreviewFileName,PATHINFO_EXTENSION);
    $thumb_valid_ext = array("jpg","jpeg","png","gif");
    $preview_valid_ext = array("mp4","mkv");

    
    if(in_array($ext1,$thumb_valid_ext) && in_array($ext2,$preview_valid_ext))
    {
    $us1 = str_replace(" ","_",$username);    
    $thumb_new_name = $us1."_".rand() . "." . $ext1;
    $path1 = "../entities/thumbnails/".$thumb_new_name;
    $path1d = "entities/thumbnails/".$thumb_new_name;
    if(move_uploaded_file($_FILES['file-upload-thumbnail']['tmp_name'],$path1))
    {

    }else{
        echo "not uploaded1";
        return;
    } 
        
    $preview_new_name = $us1."_".rand(). "." . $ext2;
    $path2 = "../entities/previews/".$preview_new_name;
    $path2d = "entities/previews/".$preview_new_name;
        
    if(move_uploaded_file($_FILES['file-upload-preview']['tmp_name'],$path2))
    {

    }else{
        echo "not uploaded2";
        return;
    }
     
     $query = $con->prepare("INSERT INTO entities(name,thumbnail,preview,categoryId,description,type,username) VALUES('$title','$path1d','$path2d',$category,'$desc',$type,'$username')");   
    $query->execute();
  
    echo "done";    
        
    }
    else
    {
    echo "not a valid thumbnail or video file";
    }






?>