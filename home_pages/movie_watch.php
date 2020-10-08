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

<?php 
    
 require_once("../resources/css/home_welcome_css.php");   

 require_once("../home_pages/left_nav.php"); ?>
    
    
<div class="right-contain-home-box">
        
        <div class="right-contain-home-box-elements">
            <h2 style="border-bottom:none;padding-bottom:0px;">Movies</h2>
            
<!--        trending suggestion box    -->
            
         
            
<!-- categories box   -->

                 
        <?php
        $cat = new categoryContain($con,$_SESSION['userLoggedIn']);
        echo $cat->showMovieCategories(); 

        ?>
            
            
            
        </div>
        
        
        
        
        


</div>




<script>
    $(".cat-container-box h3").css("margin-top","20px");


    $("li").removeClass("selected-nav-li");
        $("#movie-nav-li").addClass("selected-nav-li");
    $("#movie-nav-li"). prop('onclick',null);

</script>