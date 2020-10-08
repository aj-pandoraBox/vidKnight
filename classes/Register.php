<?php

class Register
{
    private $con;
    private $err_messages = array();
    public function __construct($con)
    {
        $this->con = $con;
    }
    
    public function register($em,$un,$pwd)
    {
        
        $username = $this->username_validate($un);
        $em = $this->email_validate($em);
        $pwd = $this->password_validate($pwd);
        $pwd = hash("sha512",$pwd);
        
        
        
        if(empty($this->err_messages))
        {
            $query = $this->con->prepare("INSERT INTO users(username,email,password) VALUES(:un,:em,:pwd)");

            $query->bindValue(":un",$un);
            $query->bindValue(":em",$em);
            $query->bindValue(":pwd",$pwd);

            $query->execute();
            
            return $this->err_messages;

        }
        
        
        return $this->err_messages;

        
        
    }
    
    public function login($un,$pwd)
    {
         $query = $this->con->prepare("SELECT * FROM users WHERE username=:un AND password=:pwd");
            $query->bindValue(":un",$un);
            $query->bindValue(":pwd",hash("sha512",$pwd));
            $query->execute();
        
        if($query->rowCount() == 1)
        {
            return true;
            
        }
        
        array_push($this->err_messages,Errors::$loginInvalid);

        return false;
        
        
    }
    
    
    private function email_validate($em)
    {
        if(!filter_var($em, FILTER_VALIDATE_EMAIL))
        {
            array_push($this->err_messages,Errors::$emailValid);
            return;
            
        }
        
         $query = $this->con->prepare("SELECT * FROM users WHERE email=:em");
            $query->bindValue(":em",$em);
            $query->execute();
            if($query->rowCount() != 0)
            {
            array_push($this->err_messages,Errors::$emailExists);
            return; 
            }
        
        return $em;
    }
    
    private function username_validate($un)
    {
        if(strlen($un) < 3 || strlen($un) > 50)
        {
            array_push($this->err_messages,Errors::$usernameLength);
            return;
            
        }
            
            $query = $this->con->prepare("SELECT * FROM users WHERE username=:un");
            $query->bindValue(":un",$un);
            $query->execute();
            if($query->rowCount() != 0)
            {
            array_push($this->err_messages,Errors::$usernameExists);
            return; 
            }
        
        return $un;
     }
        
    
     private function password_validate($pwd)
    {
         if(strlen($pwd) < 8 || strlen($pwd) > 50)
        {
            array_push($this->err_messages,Errors::$passwordLength);
            return;
            
        }
         
         return $pwd;
     }
    
    
    
    public function err_display($err)
    {
        if(in_array($err,$this->err_messages))
        {
            return $err;
        }
    }
    
    
    
    
}

?>