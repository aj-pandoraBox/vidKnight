<?php
require_once("connection/config.php"); 
require_once("classes/Errors.php");  
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"  >
    <title>Document</title>
    <link rel="stylesheet" href="vendors/css/normalize.css">
    <link rel="stylesheet" href="vendors/css/grid.css">
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;1,400&display=swap" rel="stylesheet">

    
   
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="resources/css/queries.css">
    <script src="vendors/js/jq.js"></script>
      <script src="https://unpkg.com/ionicons@5.1.2/dist/ionicons.js"></script>

  
</head>
<body>
<?php
if(isset($_SESSION["userLoggedIn"] ))
{
    require_once("home.php");
}else{
    ?>

 
  <header>
     
     
      <div class="left">
         <?php
        
        require_once("welcome_pages/welcome-box-left.php");  
            
          ?>
        
        
        
 
      </div> 
      
      
    
      <div class="right">
      <?php
          require_once("welcome_pages/welcome-box-right.php");
        ?>
        
      </div> 
      
      
  </header>
  <?php
}
    
    ?>
  
  
  
  <script src="resources/js/designScript.js"></script>
  <script src="resources/js/regitser_login.js"></script>

</body>
</html>


