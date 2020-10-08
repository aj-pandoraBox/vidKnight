<?php
require_once("../classes/Preview_Screen.php");
require_once("../connection/config.php");
require_once("../classes/Item.php");
require_once("../classes/categoryContain.php");  
require_once("../classes/ItemProvider.php");  
?>
    
<?php  require_once("../resources/css/home_welcome_css.php"); ?>  
<?php  require_once("../classes/SeasonScreen.php"); ?>  
<?php  require_once("../classes/Video.php"); ?>  
<?php  require_once("../classes/Season.php"); ?>  



<?php
if(isset($_GET['watch_id']))
{
//echo $_GET['watch_id'];
}else{
    exit();
}

//$query=$con->prepare("SELECT DISTINCT(subscribers.userTo),subscribers.userFrom FROM `subscribers` INNER JOIN entities on entities.username = subscribers.userTo WHERE subscribers.userFrom='$'");

$w_id=$_GET['watch_id'];
$query = $con->prepare("SELECT * FROM videos where id=$w_id");
$query->execute();
$row = $query->fetch(PDO::FETCH_ASSOC);
$e_id= $row['entityId'];
$s_username= $_SESSION['userLoggedIn'];


$query = $con->prepare("SELECT * FROM entities where id=$e_id LIMIT 1");
$query->execute();
$row = $query->fetch(PDO::FETCH_ASSOC);
$e_username= $row['username'];

$query = $con->prepare("SELECT DISTINCT(subscribers.userTo),subscribers.userFrom FROM `subscribers` INNER JOIN entities on entities.username ='$e_username' WHERE subscribers.userFrom='$s_username' and subscribers.userTo='$e_username' ");

$query->execute();
if($query->rowCount() ==0 and $e_username!=$s_username)
{
?>
   
   <script>

   $.post("classes/Give_back_id.php",{user:'<?php echo $e_username; ?>'}).done(function(data){
            $('#all-home-container').load('home_pages/profile.php?user='+data);
             window.history.replaceState("profile", "profile", "index.php?user="+data);

        });
                   alert("Please subscribe to watch the video");

       
//       alert("You are not subscribed to this channel");
</script>
   
<?php   
    
    exit();
}


$video = new Video($con,$_GET['watch_id']);
$video->incrementViews();

?>


<div class="vidConatiner" style="position: relative;">
    
    <div class="vidCtl watchNav">
        <button></button>
        <h2><?php echo $video->getTitle(); ?> : </h2>
        <h2>Season <?php echo $video->getSeasonNumber(); ?></h2>
        <h2>Episode <?php echo $video->getEpisodeNumber(); ?></h2>
    </div>
    
    <video controls autoplay style="width:100%;height:100vh" id="vidPlay">
        <source src="<?php echo $video->getFilePath(); ?>" type="video/mp4">
        
    </video>
    
</div>


<script>
    
//    var vid = document.getElementById("vidPlay");
       initVideo("<?php echo $video->getId(); ?>", "<?php echo $_SESSION["userLoggedIn"] ; ?>");
       setDur("<?php echo $video->getId(); ?>", "<?php echo $_SESSION["userLoggedIn"] ; ?>");


    
    
function hideTimer()
    {
        var timeout = null;
        $(document).on("mousemove",function(){
                        clearTimeout(timeout);

               $(".watchNav").fadeIn();

            timeout = setTimeout(function(){
                
                $(".watchNav").fadeOut();

            },1000);
            
        });
    }
    
function  initVideo(videoId,username){
    $(".watchNav").fadeOut();
    hideTimer();
    updateProgress(videoId,username);

    
    
}
    
function updateProgress(videoId,username)
 {
addDuration(videoId,username);
     
var timer;
     
  
     
     
    $("#vidPlay").on("ended",function()
    {    
         window.clearInterval(timer);
                   console.log("end");

        updateToFinish(videoId,username);
    });
     
    
     
}
    
function addDuration(videoId,username)
    {
        $.post("classes/addDur.php",{videoId:videoId,username:username},function(data){
            if(data !== null && data !== "")
           {
           alert(data);
     
         }
        });
    }

function updateToFinish(videoId,username)
    {
        
        $.post("classes/UpdateFinish.php",{videoId:videoId,username:username},function(data){
            if(data !== null && data !== "")
           {
           alert(data);
     
         }
        });
       
    }
    

    
    

</script>
