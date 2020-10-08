$(".welcome-box h1").css("color","#000");


$("#register").click(function(){
    $("#regiPage").show();
    $("#loginPage").hide();



      });           

$(document).ready(function(){

    $(".welcome-box h1").css("color","#fff");

});

$("#regiPage").hide();
$("#login_button_pressed").click(function(){
    
    $("#loginPage").show();
    $("#regiPage").hide();
    $("#login_button_pressed").addClass("selected");
    $("#regi_button_pressed").removeClass("selected");
    
});

$("#regi_button_pressed").click(function(){
    
    $("#regiPage").show();
    $("#loginPage").hide();
    $("#regi_button_pressed").addClass("selected");
    $("#login_button_pressed").removeClass("selected");

});

