//login function ajax call

$("#login").click(function(){
    $(".err_msg").text("");
    var username = $("#username-lg").val();
    var password = $("#password-lg").val();
    $("#login").val("Loading...");
    $("#login").css("background-color","rgba(101, 101, 101, 0.54)");

    $.post("functions/login_function.php", {username:username,password:password}).done(function(data){
        if(data == "success")
            {
                

                        
                $("#login").val("Welcome");
                $("#welcome-box-right").fadeOut();
                $("#welcome-box-left").fadeOut();
                 
                $(".left").fadeOut(800);
                $(".right").fadeOut(800);

                
                setTimeout(function(){  
                            
                        $("body").load("home.php");

                         }, 1200);              
            //window.location = "home.php";
            }else{
                
          
                
               $(".err_msg_login").text("channel name or password does not exists");
               $("#login").val("Login");
               $("#login").css("background-color","#eb3b5a");


            }
        
        
        
    });
    
    
});


//regitser function ajax call


$("#register").click(function(){
    $(".err_msg").text("");
   var username = $("#username").val();
   var email = $("#email").val();
    var password = $("#password").val();
    $("#register").val("Loading...");
    $("#register").css("background-color","rgba(101, 101, 101, 0.54)");
    
     $.post("functions/signUp_function.php", {username:username,email:email,password:password}).done(function(data){
        if(data == "success")
            {
                
                    $("#register").val("Welcome");
                    $("#welcome-box-right").fadeOut();
                    $("#welcome-box-left").fadeOut();
                $(".left").fadeOut(800);
                $(".right").fadeOut(800);
               
                
                setTimeout(function(){  
                            
                        $("body").load("home.php");

                         }, 1200);
    

                
//                $("#welcome-box-right").hide();
//                $("#welcome-box-left").hide();
//                $(".right").load("home-right.php");
//                
//                $(".left").load("home-left.php");
//            
                
             // window.location = "home.php";
            }else{
                
            $("#register").val("Register");
            $("#register").css("background-color","#eb3b5a");    
            var newData = jQuery.parseJSON(data);
            var cars = ["Saab", "Volvo", "BMW"];

                var i = 0;
                while(i<newData.length)
                    {
                    var replaced = newData[i].split(' ').join('_');
                 $("."+replaced).text(newData[i]);
                        i=i+1;
                    }
                

            }
    });
    
    
    
});
