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
    
    
<!--<div class="box-video-container">-->
<?php
    
$preview = new Preview_Screen($con,$_SESSION['userLoggedIn']);
    
if(isset($_GET['id']))
{
//echo $preview->create_preview($_GET['id']);    
$itemId = $_GET['id'];
$iteme = new Item($con,$itemId);
//echo $preview->create_preview($iteme); 

}else
{
   echo $preview->create_preview(null); 
}

       
 
?>



<!--</div> -->

<?php
$seasonScreen = new SeasonScreen($con,$_SESSION["userLoggedIn"]);
//echo $seasonScreen->createSeasons($iteme); 

?>

<div class="contain-the-box">
      <?php require_once("../home_pages/left_nav.php"); ?>

    
    <div class="right-contain-home-box">
    
    
<!--video info preview and play    -->
   
   <?php
    echo $preview->create_previewTest($iteme);
        
        echo $seasonScreen->createSeasons($iteme); 

?>
   
   
   
<?php require_once("../classes/reviews_item.php"); ?>

    
    
    
    
    
    </div>
    
</div>

<style>
    

</style>





<!--javascript for preview video animation and also some loading optimization of video while previewing: effects can we seen on live website                    -->

<script>
    
$('document').ready(function() {
   $(window).scrollTop(0);
});
    
    
$("li").removeClass("selected-nav-li");
    
    
    

    
function Peview_Clicked_Video(idd){

        
        $.post("classes/Give_back_id.php",{watch_video_id:idd}).done(function(data){
            
            $('#all-home-container').load('home_pages/watch_video.php?watch_id='+data);
             window.history.pushState("watch_page", "watch", "index.php?watch_id="+idd);

        });
    
   
    }    
     function go_profile_page(user){

        
         
        $.post("classes/Give_back_id.php",{user:user}).done(function(data){
            
            $('#all-home-container').load('home_pages/profile.php?user='+data);
             window.history.pushState("profile", "profile", "index.php?user="+data);

        });
    }  
    
    
    
    var id_page = 
    $("#watch").click(function(){
    // document.querySelector('.category_links .cat-selected').classList.remove('cat-selected');
       
    }); 
   
    
    var video = document.getElementById("vid-preview");
        
   
    
    
 
    
    

    
    var i = 0;    
    
    
    function preview_the_video()
    {
        if(i == 0)
        {
            i = 1;
        $(".video-preview-item-full-container video").fadeIn();
        $(".preview-btn-play").text("Cancel Preview");
            
        }else
        {
           i = 0;
            $(".video-preview-item-full-container video").fadeOut(); 
            $(".preview-btn-play").text("Preview"); 
        }
        
    }
  

    
  

    
    
    
</script> 

