<!--<div class="box-video-container">-->
<?php    
if(isset($_GET['watch_id']))
{
?>    
    <script>
    $('#all-home-container').load('home_pages/watch_video.php?watch_id='+<?php echo $_GET['watch_id'];?>);
    </script>
<?php    
}
    
    
    
if(isset($_GET['id']))
{
?>
<script>
    
    $('#all-home-container').load('home_pages/Item.php?id='+<?php echo $_GET['id'];  ?>);

    </script>   
<?php    
    }else
{
//   echo $preview->create_preview(null); 
}


if(isset($_GET['show']))
{
?>
   
<script>         
    
        $('#all-home-container').load('home_pages/tv_shows.php');
    
</script>  
<?php
}


if(isset($_GET['movie']))
{
?>
   
<script>         
    
        $('#all-home-container').load('home_pages/movie_watch.php');
    
</script>  
<?php
}


if(isset($_GET['search']))
{
?>
   
<script>         
    
        $('#all-home-container').load('home_pages/search.php');
    
</script>  
<?php
}

if(isset($_GET['upload']))
{
?>
   
<script>         
    
        $('#all-home-container').load('home_pages/upload.php');
    
</script>  
<?php
}

   
if(isset($_GET['user']))
{
?>
<script>
    
    $('#all-home-container').load('home_pages/profile.php?user=<?php echo $_GET['user']; ?>');

    </script>   
<?php    
    }



if(isset($_GET['homeUser']))
{
?>
<script>
    
      $('#all-home-container').load("home_pages/home_user.php");


    </script>   
<?php    
    }



if(!isset($_GET['homeUser']) && !isset($_GET['watch_id']) && !isset($_GET['id']) && !isset($_GET['show'])  && !isset($_GET['movie'])  && !isset($_GET['search'])  && !isset($_GET['upload']) && !isset($_GET['user']) ) 
{
?>
<script>
    
             
    $("li").removeClass("selected-nav-li");
        $("#discover-nav-li").addClass("selected-nav-li");
    $("#discover-nav-li"). prop('onclick',null);
    

    </script>   
<?php    
    }




?>



<!--</div> -->


<?php
//    echo $preview->ItemSuggestionBox(10); 
//    
//$cat = new categoryContain($con,$_SESSION['userLoggedIn']);
//echo $cat->showAllCategories(); 

?>
  
    
<div class="contain-the-box">

    <?php require_once("home_pages/left_nav.php"); ?>
    
    
    <div class="right-contain-home-box">
        
        <div class="right-contain-home-box-elements">
            <h2>Discover</h2>
            
<!--        trending suggestion box    -->
            
            <div class="suggestion-div-box-home-container">
            
            <?php 
                $preview = new Preview_Screen($con,$_SESSION['userLoggedIn']);

                echo $preview->ItemSuggestionBox(10);
                
                
                ?>
            
        
            </div>
            
            
<!-- categories box   -->
<!--
      <div class="cat-container-box">
          
               <h3>Sci-fi-fantasy</h3>
               
                <div class="cat-box-info">
                    <img src="entities/thumbnails/nfs.jpg">
                    <h4>Title of the preview</h4>
                    <p>Written enquire painful ye to offices for..</p>
                </div> 
                   
          
      </div>              
            
-->
        <?php
        $cat = new categoryContain($con,$_SESSION['userLoggedIn']);
        echo $cat->showAllCategories(); 
            
            
            ?>
            
            
            
        </div>
        
        
    </div>
    
    
    
</div>      
        
                      
                                              
<!--
                
javascript for preview video animation and also some loading optimization of video while previewing: effects can we seen on live website                    
-->

<script>
$("li").removeClass("selected-nav-li");
        $("#discover-nav-li").addClass("selected-nav-li");
    $("#discover-nav-li"). prop('onclick',null);

   
    var id_page = 
    $("#watch").click(function(){
    // document.querySelector('.category_links .cat-selected').classList.remove('cat-selected');
       
    }); 
    
    function watch_video(videoId)
    {
        $.post("classes/Give_back_id.php",{watch_video_id:videoId}).done(function(data){
            
            $('#all-home-container').load('home_pages/watch_video.php?watch_id='+data);
             window.history.pushState("watch_page", "watch", "index.php?watch_id="+data);

        });
        
    }
   
    function Peview_Clicked_Image(idd){

        
        $.post("classes/Give_back_id.php",{id:idd}).done(function(data){
            
            $('#all-home-container').load('home_pages/Item.php?id='+data);
             window.history.pushState("ss", "Title", "index.php?id="+idd);

        });
    }
    
    
    function go_profile_page(user){

        
         
        $.post("classes/Give_back_id.php",{user:user}).done(function(data){
            
            $('#all-home-container').load('home_pages/profile.php?user='+data);
             window.history.pushState("profile", "profile", "index.php?user="+data);

        });
    }
    
    
    var video = document.getElementById("vid-preview");
        
    
//    video.addEventListener('loadedmetadata', function() {
//    if (video.buffered.length === 0) return;
//
//    var bufferedSeconds = video.buffered.end(0) - video.buffered.start(0);
////    console.log(bufferedSeconds + ' seconds of video are ready to play!');
////    $("#preview_button span").text("Preview");
//
//    });
//    
//    video.addEventListener("canplaythrough", function() {
//            $("#preview_button span").text("Preview LOAD");
//            var bufferedSeconds = video.buffered.end(0) - video.buffered.start(0);
//    console.log(bufferedSeconds + ' seconds of video are ready to play!');
//    $("#preview_button span").text("Preview");
//
//
//    }, false);  
    
    
//    video.onprogress = function(){
//    var w = 100*(video.buffered.end(0))/video.duration;
//    console.log(w);
//     
//    if(w == 100)
//        {
//            $("#preview_button span").text("Preview..");
//            console.log("yes");
//        }
//        
//    }
    
   
    
    

    
    var i = 0;    
    $("#preview_button").click(function(){
        
        
        
    if(i==0)
    {
        
    i = 1;    
        
   intoThePreviewScreen();
    
        
    }else{
        i = 0;
       backToPreviewScreen();
        
        
    }
    });
        
    
function intoThePreviewScreen()
    {
        $("#preview_button").css("pointer-events", "none");
        $(".video-preview-box-contain h2").css("font-size", "40px");
        
        
    $(".preview-left").css("height","100%");    
    $(".video-preview-box-contain p").css("opacity","0");
    $(".video-preview-box-contain p").css("margin-bottom","0px");
    $(".video-preview-box-contain h2").css("margin-bottom","0px");
    $("#preview_button span").text("Loading...");
   
        
    setTimeout(function(){  
                            $(".video-preview-box-contain p").css("opacity","0");
    
        
                            $(".video_preiview_container").css("display","block");
                            $(".preview_video").get(0).play();
                            $("#preview_button").css("pointer-events", "auto");
                            var video = document.getElementById("vid-preview");

                            

        
                            $("#preview_button span").text("Cancel");
                          
                         }, 2000);
    
        
        
    }
    
function backToPreviewScreen()
    {
         $("#preview_button").css("pointer-events", "none");
                $(".video-preview-box-contain h2").css("font-size", "50px");

        $(".preview-left").css("height","100%");
        $(".video-preview-box-contain p").css("opacity","1");
    $(".video-preview-box-contain p").css("margin-bottom","20px");
    $(".video-preview-box-contain h2").css("margin-bottom","25px");

    
    
    $(".preview_video").get(0).pause();

    setTimeout(function(){  $(".video_preiview_container").css("display","none"); }, 100);
    setTimeout(function(){  $("#preview_button").css("pointer-events", "auto");  
                            $("#preview_button span").text("Preview");

                         }, 1000);
       
        
    }
    
    


</script> 