<?php
require_once("../connection/config.php");

$username = $_POST['username'];
$title = $_POST['title-name-add'];
$desc = $_POST['desc-create-add'];
$videoFileName = $_FILES['file-upload-video-add']['name'];
$entityId = $_POST['entity-id-add'];
$tvOrMovieId = $_POST['tvOrMovieId'];
$seasonNo = $_POST['season-no-add']==""? 0 :$_POST['season-no-add'] ;
$episodeNo = $_POST['episode-no-add']==""? 0 :$_POST['episode-no-add'];

if($tvOrMovieId==0 && $seasonNo=="" && $episodeNo =="")
{
    $query = $con->prepare("SELECT season,episode FROM videos WHERE entityId=$entityId  
 ORDER BY `season` DESC, episode DESC  LIMIT 1");
    $query->execute();
    $row = $query->fetch(PDO::FETCH_ASSOC);
    
    if($query->rowCount()>0)
    {
    $seasonNo = $row['season'];  
    $episodeNo = $row['episode'] +1;  
    }else
    {
        $seasonNo=1;
        $episodeNo=1;
    }
}

$ext = pathinfo($videoFileName,PATHINFO_EXTENSION);
$preview_valid_ext = array("mp4","mkv");

 if(in_array($ext,$preview_valid_ext))
 {
     $us1 = str_replace(" ","_",$username);
    $video_new_name = $us1."_".rand() . "." . $ext;
     
     
    $path = "../entities/videos/".$video_new_name;
    $pathd = "entities/videos/".$video_new_name;
     
    if(move_uploaded_file($_FILES['file-upload-video-add']['tmp_name'],$path))
    {

    }else{
        echo "could not upload the file";
        return;
    } 
     
     
    $query=$con->prepare("INSERT INTO videos(title,description,filePath,isMovie,season,episode,entityId) VALUES('$title',:desc,'$pathd',$tvOrMovieId,$seasonNo,$episodeNo,$entityId)"); 
     $query->bindValue(":desc",$desc);
     $query->execute();
     echo "done";
     
     
 }else
 {
     echo "Only mp4 and mkv supported files";
     return;
 }
?>