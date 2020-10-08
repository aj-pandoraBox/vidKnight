<?php
require_once("../classes/Preview_Screen.php");
require_once("../connection/config.php");
require_once("../classes/Item.php");
require_once("../classes/categoryContain.php");  
require_once("../classes/ItemProvider.php");  
require_once("../classes/SubscribeProvider.php");  
?>
    
<?php  require_once("../resources/css/home_welcome_css.php"); ?>  
 
    

 


<!--</div> -->


<div class="contain-the-box">
      <?php require_once("../home_pages/left_nav.php"); ?>

    
    <div class="right-contain-home-box">
    
     <div class="right-contain-home-box-elements">
            <h2>Home</h2>
            
        </div>
        
    
      

    <?php require_once("../classes/allTheSub.php"); ;?>
    
    
<!--
    
    
    <div class="home-user-box-container">
        <h6><ion-icon name='tv-sharp'></ion-icon></h6>
        <img src="entities/thumbnails/ajay2_1173909623.jpg">
        <h2>My title</h2>
        <h7>Season 2 Episode 5</h7>
        <h4>Assure polite his really and others figure though. Day age advantages end sufficient eat expression travelling.</h4>
        <h5>by ajay</h5>
        
        
    </div>
-->
    
    <?php  
        //$sub = new SubscribeProvider($con,$_SESSION['userLoggedIn']);
        
        ?>
    
    
    <div class="loadSearchData">
        
        
    </div>
    <h5 style='margin-left:40px;color:#fff;margin-top:40px;margin-bottom:20px;'>Subscribe to channels to see more videos</h5>
    
    </div>
    
</div>





<script>

    
 $("li").removeClass("selected-nav-li");
        $("#home-user-nav-li").addClass("selected-nav-li");
    $("#home-user-nav-li"). prop('onclick',null);
    
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
    
    
    
    
var start = 0;
var limit = 8;
var max = false;
    
$(".right-contain-home-box").scroll(function(){
   
        
    if($(".right-contain-home-box").scrollTop() >= parseInt($(".loadSearchData").height()) -  $(".right-contain-home-box").height() )
        {
            getData();
        }
    

});    
    
    
$("document").ready(function(){
    getData();
    
});    

function getData()
    {
    
        
    if(max)   
    {
            return;
    }
        
    $.post("classes/SubProv.php",{getData:1,start:start,limit:limit,userFrom:'<?php echo $_SESSION['userLoggedIn'];?>'}).done(function(data){
        
        if(data == 'max')
            {
                max = true;
              $(".loadSearchData").append("");

            }else
                {
                    $(".messgae-no-vid-home").hide();
                start += limit; 
                    
        $(".loadSearchData").append(data);
                }
    });
    
    }

</script> 

