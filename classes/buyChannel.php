<?php
require_once("../connection/stripe_config.php");
require_once("../connection/config.php");


//\Stripe\Stripe::setVerifySslCerts(false);

$token= $_POST['stripeToken'];

$emLogged=  $_POST['emailLogged']; // email from
$userLogged=  $_POST['userLogged']; // user to
$amount=  $_POST['userAmount']; 
$query = $con->prepare("SELECT * FROM users where username='$userLogged'");
$query->execute();
$row = $query->fetch(PDO::FETCH_ASSOC);
$emLogged2 = $row['email'];// email To


$query = $con->prepare("SELECT * FROM users where email='$emLogged'");
$query->execute();
$row = $query->fetch(PDO::FETCH_ASSOC);
$userLogged2 = $row['username']; // user From


$query = $con->prepare("SELECT * FROM subscribers where userTo='$userLogged' and userFrom='$userLogged2'");
$query->execute();



$query->execute();
$row = $query->fetch(PDO::FETCH_ASSOC);

try{
$data = \Stripe\Charge::create(array(
    "amount"=>$amount,
    "currency"=>"inr",
    "description"=>$userLogged,
    "source"=>$_POST['stripeToken'],

));

    if($query->rowCount() == 0)
{
  $query = $con->prepare("insert into subscribers(userTo,emailTo,userFrom,emailFrom) values('$userLogged','$emLogged2','$userLogged2','$emLogged')");
$query->execute(); 
        
        
}
    
  echo "success";
 
}catch(\Stripe\Exception\CardException $e)
{
    echo $e->getError()->message;
}

?>
