<?php
require_once("../connection/config.php");


if($_POST['showVid'])
{
   $us1 = $_SESSION['userLoggedIn'];
$query = $con->prepare("SELECT DISTINCT(entities.id),name,type FROM entities INNER JOIN videos on videos.entityId = entities.id where username='$us1' ORDER BY id DESC");
$query->execute();
echo " <option value='-1'>Select</option>";

while($row = $query->fetch(PDO::FETCH_ASSOC))
{
$id = $row['id'];
$name = $row['name'];
$movieOrTvShow = $row['type'] == 1 ? "Movie" : "Tv-show";
$idMovieOrShow = $row['type'] ;
echo " <option id='$idMovieOrShow' value='$id'>$name $movieOrTvShow</option>";
}
    
    
    
}
else
{
    
$us1 = $_SESSION['userLoggedIn'];
$query = $con->prepare("SELECT * FROM entities where username='$us1' ORDER BY id DESC");
$query->execute();
echo " <option value='-1'>Select</option>";

while($row = $query->fetch(PDO::FETCH_ASSOC))
{
$id = $row['id'];
$name = $row['name'];
$movieOrTvShow = $row['type'] == 1 ? "Movie" : "Tv-show";
$idMovieOrShow = $row['type'] ;
echo " <option id='$idMovieOrShow' value='$id'>$name $movieOrTvShow</option>";
}
}

?>