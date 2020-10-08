<?php
require_once("../connection/config.php"); 
require_once("../classes/InputCleaner.php");
require_once("../classes/Errors.php");
require_once("../classes/Register.php");

$reg = new Register($con);
if(isset($_POST['username']) && isset($_POST['password']) && isset($_POST['email']) )
{
    $email = InputCleaner::clean_input_text($_POST['email']);
    $username = InputCleaner::clean_input_text($_POST['username']);
    $password = InputCleaner::clean_input_password($_POST['password']);
    
    $success = $reg->register($email,$username,$password);
    if(empty($success))
    {
        $_SESSION["userLoggedIn"] = $username;
        echo "success";

    }else
    {
        
        echo json_encode($success);
         
    }
    
    
}

?>