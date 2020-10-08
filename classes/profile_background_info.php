<?php
require_once("../connection/stripe_config.php");
\Stripe\Stripe::setVerifySslCerts(false);

$userLoggedIn = $_SESSION['userLoggedIn'];
$query = $con->prepare("SELECT * FROM users where username='$userLoggedIn'");
$query->execute();
$row = $query->fetch(PDO::FETCH_ASSOC);
$email_loggedInUser=$row['email'];



$query = $con->prepare("SELECT * FROM users where username='$user_profile'");
$query->execute();
$row = $query->fetch(PDO::FETCH_ASSOC);
$pic=$row['pic'];
$desc=$row['description'];
$amount = $row['price']*100;
$amount2withoutConverion = $row['price'];

if($userLoggedIn == $user_profile)
{
    
echo " <div class='profile-background-container'>
        <img src=$pic class='img-profile-background change-profile-background-img' ondblclick='profileBackgroundImgClicked()'>
        <form action='#' id='form-prof-update'>
        <input type='file' style='display:none' id='image-file-profile-user' name='image-file-profile-user'>
        </form>
        <div class='profile-background-elements-container' style='padding: 20px 40px'>
            <h4>$user_profile</h4>
            <textarea class='desc-profile-update-type'>$desc</textarea>
            <button class='btn-prof-sub' onclick='popUpUpdatePrice()' style='cursor:pointer;' >Update Price</button>

        </div>
    </div>
    
    <div class='updatePriceModal'>
    <div class='updatePriceModalContenet'>
    <h4>Current Price: $amount2withoutConverion</h4>
    <input type='text' class='updatePriceModaltext'>
    <input type='submit' class='updatePriceModalSubmit' value='Update Price'>
    <input type='submit' class='updatePriceModalClose' value='Close'>

    </div>
    </div>
    
    ";
    
}else
{
  $query = $con->prepare("SELECT * FROM subscribers where userTo='$user_profile' and userFrom='$userLoggedIn'");
$query->execute();
    if($query->rowCount()==0)
    {
    
    
echo " <div class='profile-background-container'>
        <img src=$pic class='img-profile-background'>
        <div class='profile-background-elements-container'>
            <h4>$user_profile</h4>
            <p>$desc</p>
            <button class='btn-prof-sub' style='display:none;'>Subscribed</button>
            <form action='#' method='POST' id='booking' class='btn-prof-sub-stripe'>
            <script
            src='https://checkout.stripe.com/checkout.js'
            class='stripe-button'
            data-key='$pk'
            data-name='Custom t-shirt'
            data-description='$user_profile'
            data-amount='$amount'
            data-currency='inr'
            data-email='$email_loggedInUser'
            data-label='Subscribe'>
            </script>
            <input hidden value='$email_loggedInUser' name='emailLogged'>
            <input hidden value='$user_profile' name='userLogged'>
            <input hidden value='$amount' name='userAmount'>

            </form>
            
            
        </div>
    </div>";
}else{
        
        echo " <div class='profile-background-container'>
        <img src=$pic class='img-profile-background'>
        <div class='profile-background-elements-container'>
            <h4>$user_profile</h4>
            <p>$desc</p>
            <button class='btn-prof-sub'>Subscribed</button>
        </div>
    </div>";
        
        
        
    }
}


?>
       
      






<script>
    
    
$('#booking').get(0).submit = function(e) {
     $('button[type="submit"]').prop('disabled', false);
var myform = document.getElementById("booking");
    var fd = new FormData(myform);

    $.ajax({
        url: "classes/buyChannel.php",
        data: fd,
        cache: false,
        processData: false,
        contentType: false,
        type: 'POST',
        success: function (data) {
            if(data == 'success')
                {
                    $(".btn-prof-sub-stripe").hide();
                    $(".btn-prof-sub").show();
                    var subC = parseInt($(".subCounter").text())+1;
                    console.log(subC);
                    $(".subCounter").text(subC.toString());
//                    $(".btn-prof-sub").text(data);
                }else
            { 
             console.log(data);
            $('.stripe-button-el').removeAttr("disabled");
                $(".stripe-button-el span").text(data);

       
            }
            
//            $('#payButton').attr('disabled', true);
//                 $('.stripe-button-el').removeAttr("disabled");
//                 $('.stripe-button-el').hide();

        }
    });
    return false;
    
    
    
    

  }    


</script>


