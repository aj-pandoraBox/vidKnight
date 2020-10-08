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
    

<div class="contain-the-box">
      <?php require_once("../home_pages/left_nav.php"); ?>

    
    <div class="right-contain-home-box">
    
 

 
   <?php $user_profile= $_GET['user'];
        
    if($user_profile == $_SESSION['userLoggedIn'])
    {
        ?>
        <script>
        
         $("li").removeClass("selected-nav-li");
        $("#profile-nav-li").addClass("selected-nav-li");
    $("#profile-nav-li"). prop('onclick',null);
    
        </script>
        
        <?php
    }else{
        ?>
        
        <script>
        $("li").removeClass("selected-nav-li");

        </script>
        <?php
        
        
    }
        
        
        ?>
 
    
    
<!--
    <div class="profile-background-container">
        <img src="entities/profile_pic/default2.jpg" class="img-profile-background">
        <div class="profile-background-elements-container">
            <h4>ajay1</h4>
            <p>Raising say express had chiefly detract demands she...</p>
            <button class="btn-prof-sub">Subscribe</button>
        </div>
    </div>
-->
 
       <?php require_once("../classes/profile_background_info.php"); ?>



  
      
        
          
              
<!--
 <div class="profile-info-container">
     <div class='profile-info-container-elements'>
         <h4>Tv-shows</h4>
         <p>10</p>
     </div>
        
    <div class='profile-info-container-elements'>
         <h4>Movies</h4>
         <p>5</p>
     </div> 
        
    <div class='profile-info-container-elements'>
         <h4>Subscribers</h4>
         <p>200</p>
     </div>
        
    <div class='profile-info-container-elements'>
         <h4>Categroies</h4>
         <p>19</p>
     </div>
     
     
 </div>
-->
          <?php require_once("../classes/profile_extra_info.php"); ?>

   
 
<!--
   <div class="profile-movie-tv-show-container">
       <div class="profile-content-container">
           <h4>Movies</h4>
           <div class="profile-container-content-element">
               <img src="entities/thumbnails/2012.jpg">
               <h5>Title of the video</h5>
           </div>
       

           
           
  </div>
          
            
        <div class="profile-content-container" style="margin-top:30px;">
           <h4>Tv-shows</h4>
           <div class="profile-container-content-element">
               <img src="entities/thumbnails/2012.jpg">
               <h5>Title of the video</h5>
           </div>
       
          
          
           
           
  </div> 
       
       
   </div>
-->
   
              <div class='profile-movie-tv-show-container'>
             <?php require_once("../classes/profile_content.php"); ?>
        </div>
    
    
    </div>
    
</div>





<!--javascript for preview video animation and also some loading optimization of video while previewing: effects can we seen on live website                    -->

<script>
    
$('document').ready(function() {
   $(window).scrollTop(0);
});
    
    
    

function openItemPage(idd){

        
        $.post("classes/Give_back_id.php",{id:idd}).done(function(data){
            
            $('#all-home-container').load('home_pages/Item.php?id='+data);
             window.history.pushState("ss", "Title", "index.php?id="+idd);

        });
    } 
    

var keepCheckOfOldImage="";
function profileBackgroundImgClicked()
    {
       $("#image-file-profile-user").click();
        
    keepCheckOfOldImage=$(".change-profile-background-img").attr("src");
        
    }
 $("#image-file-profile-user").change(function(e)
    {                       
    var fileName = e.target.files[0]                    
    var fileNameCheck = e.target.files[0].name;
     if(fileNameCheck != "")
         {

     
     var formdata = new FormData();
    formdata.append("imageProfile",fileName);
    formdata.append("OldimageProfile",keepCheckOfOldImage);
        $.ajax({
            url : "functions/profile_update_pic.php",
            type : "POST",
            data : formdata,
            contentType : false,
            processData : false,
            success:function(data){
                $(".change-profile-background-img").attr("src",data);
            }
            
        });

         }
 });
    

    
$(".desc-profile-update-type").keyup(function(){
    
    
$desc_up = $(".desc-profile-update-type").val();
    if($desc_up!="")
        {
    $.post("functions/profile_update_pic.php",{desc_update:$desc_up}).done(function(data){
        console.log(data);
        
    })
        }

});
    
function popUpUpdatePrice()
    {
        $(".updatePriceModal").addClass("updatePriceModal-active");
    }
    
$(".updatePriceModalClose").click(function(){
    
        $(".updatePriceModal").removeClass("updatePriceModal-active");
    });
    
    
$(".updatePriceModalSubmit").click(function()
    {
    $price_up = $(".updatePriceModaltext").val();
    if($price_up!="")
        {
    $.post("functions/profile_update_pic.php",{price_update:$price_up}).done(function(data){
        $(".updatePriceModalContenet h4").text("Current Price: "+$price_up);
                console.log(data);
        $(".updatePriceModaltext").val("");

    })
        }
    
});   
    


        
    
</script> 

