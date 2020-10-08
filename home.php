<?php
require_once("connection/config.php"); 
require_once("classes/Preview_Screen.php");
require_once("classes/Item.php");
require_once("classes/categoryContain.php");  
require_once("classes/ItemProvider.php");  
require_once("classes/VideoProvide.php");  
require_once("classes/Video.php");  


if(!isset($_SESSION["userLoggedIn"] ))
{
    header("Location:index.php");
}

if(isset($_POST['logout']))
{
    unset($_SESSION['userLoggedIn']);
    
   
    header("Location:index.php");
}
?>
<!--
<div id="right-home">
<form action="" method="post">
    <h5>Hello</h5>
            <input type="submit" id="catch" value="<?php //echo $_SESSION['userLoggedIn']; ?>" name="logout" style="margin-left:50px;margin-top:20px;">
          
            
</form>
</div> 
-->
<div id="all-home-container">
<?php  require_once("home_pages/videoPreviewBackground.php"); ?>  
<?php  require_once("resources/css/home_welcome_css.php"); ?>  

</div>

<script>
    localStorage.setItem("nav-element","discover");

    nav();
    var iloc = 1;
    
 
    
function nav()
    {
window.addEventListener('popstate', function(event) {
    // The popstate event is fired each time when the current history entry changes.
    
     goback();
        
}, false);
    }
    
function goback()
    {
        if(iloc == 1)
        {
         $("body").load(document.location.href);
         console.log(document.location.href);
        }
     iloc+=1;
    }
    

    function season_destroy_function(usernameLogout)
    {
    $.post("classes/Give_back_id.php",{usernameLogout:usernameLogout}).done(function(data){

    if(data == 'done')
       {
            $('body').load('index.php');
     window.history.pushState("index", "login", "index.php");
       }

    });
    }    
    
    

    
    
    
</script>
