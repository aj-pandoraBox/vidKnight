<?php
require_once("../connection/config.php"); 
require_once("../classes/InputCleaner.php");
require_once("../classes/Errors.php");
require_once("../classes/Register.php");

$reg = new Register($con);
if(isset($_POST['username']) && isset($_POST['password']) )
{
    
    $username = InputCleaner::clean_input_text($_POST['username']);
    $password = InputCleaner::clean_input_password($_POST['password']);
    
    $success = $reg->login($username,$password);
    if($success)
    {
        
        $_SESSION["userLoggedIn"] = $username;
//        header("Location:home.php");
        echo "success";
        
    }else
    {
         echo $username. " ". $password;
    }
    
    
}

?>