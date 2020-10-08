<?php
ob_start();
session_start();
date_default_timezone_set('Asia/Kolkata');

try
{
    $con = new PDO("mysql:dbname=vidknight;host=localhost","root","");
    $con->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_WARNING);
    
}catch(PDOException $e)
{
    exit("FAILED TO CONNECT TO DATABASE ". $e->getMessage());

}




?>