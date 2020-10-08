<?php
require_once("../classes/Preview_Screen.php");
require_once("../connection/config.php");
require_once("../classes/Item.php");
require_once("../classes/categoryContain.php");  
require_once("../classes/ItemProvider.php");  
?>
    
<?php  require_once("../resources/css/home_welcome_css.php"); ?>  
<?php  require_once("../classes/SeasonScreen.php"); ?>  
<?php  require_once("../classes/Video.php"); ?>  
<?php  require_once("../classes/Season.php"); ?>    
<div class="contain-the-box">

<?php 
    
 require_once("../resources/css/home_welcome_css.php");   

 require_once("../home_pages/left_nav.php"); ?>
    
    
<div class="right-contain-home-box">
        
        <div class="right-contain-home-box-elements">
            <h2 style="border-bottom:none;padding-bottom:0px;">Search</h2>
            
<!--        trending suggestion box    -->
            
         
            
<!-- categories box   -->

        <div class="search-box">
            
              <input type="text" id="search-id-change" placeholder="Start Searching here....">
              
              <div class="select-drop">
            <select name="" class="change-drop-search1">
                
                <option value="0">Select a Genre</option>
                <option value="0">All</option>
                <?php 
                $query = $con->prepare("select * from categories");
                $query->execute();
                while($row = $query->fetch(PDO::FETCH_ASSOC))
                {
                    $id = $row['id'];
                    $name = $row['name'];
                    
                    echo " <option value='$id'>$name</option>";
                }
                
                ?>
               
                
            </select> 
               
            <select name="" class="change-drop-search2">
                <option value="0">Select the type</option>
                <option value="0">Tv-show & Movie</option>
                <option value="1">Tv-show</option>
                <option value="2">Movie</option>
                <option value="3">Channels</option>
                
            </select>
            
            </div>
            
        </div>        
                 
          
    <div class="contain-searches">      
<!--
    <div class="box-contain-search">
        
        <img src="entities/thumbnails/2012.jpg">
        <h4>My title from Search</h4>
        <p>someparas sdsd sdsdsomepara dsds ewe..</p>
        
    </div>           
-->

<!--
     <div class="box-contain-search-channel">
        
        <img src="entities/profile_pic/default.jpg">
        <h4>My title from Search</h4>
        <p>someparas sdsd sdsdsomepara dsds ewe..</p>
        
    </div> 
-->
                    
                                                    
       </div>       
            
        </div>


</div>



<style>
    
   
    
    </style>



<script>
    $(".cat-container-box h3").css("margin-top","20px");


    $("li").removeClass("selected-nav-li");
        $("#search-nav-li").addClass("selected-nav-li");
    $("#search-nav-li"). prop('onclick',null);
    
   
    
    
    $(".change-drop-search1").change(function(){
        var c1 = $(".change-drop-search1").val();
        var c2 = $(".change-drop-search2").val();
        var v = $("#search-id-change").val();
        
       
        if(v!='')
            {
         if(c2!='3')
            {
        $.post("classes/search_ajax_call.php",{c1:c1,c2:c2,v:v}).done(function(data){
                        $(".contain-searches").html(data);

        });
        
            }else{
                $.post("classes/search_user_ajax_call.php",{c1:c1,c2:c2,v:v}).done(function(data){
                        $(".contain-searches").html(data);

                
            });
            }
        
            }else{
                $(".contain-searches").html("");
            }
        
    });
    
    
    $(".change-drop-search2").change(function(){
        var c1 = $(".change-drop-search1").val();
        var c2 = $(".change-drop-search2").val();
        var v = $("#search-id-change").val();
        
        
        if(v!='')
            {
         if(c2!='3')
            {
        $.post("classes/search_ajax_call.php",{c1:c1,c2:c2,v:v}).done(function(data){
                        $(".contain-searches").html(data);

        });
        
            }else{
                $.post("classes/search_user_ajax_call.php",{c1:c1,c2:c2,v:v}).done(function(data){
                        $(".contain-searches").html(data);

                
            });
            }
        
            }else{
                $(".contain-searches").html("");
            }
        
    });
    
    
    $("#search-id-change").keyup(function(){
        var c1 = $(".change-drop-search1").val();
        var c2 = $(".change-drop-search2").val();
        var v = $("#search-id-change").val();
        
        
       
        if(v!='')
            {
         if(c2!='3')
            {
        $.post("classes/search_ajax_call.php",{c1:c1,c2:c2,v:v}).done(function(data){
                        $(".contain-searches").html(data);

        });
        
            }else{
                $.post("classes/search_user_ajax_call.php",{c1:c1,c2:c2,v:v}).done(function(data){
                        $(".contain-searches").html(data);

                
            });
            }
        
            }else{
                $(".contain-searches").html("");
            }
        
        
        
    });
    
    
      
    function Peview_Search_Item(idd){

        
        $.post("classes/Give_back_id.php",{id:idd}).done(function(data){
            
            $('#all-home-container').load('home_pages/Item.php?id='+data);
             window.history.pushState("ss", "Title", "index.php?id="+idd);

        });
    }
    
    function Peview_Search_Profile(user){

        
        $.post("classes/Give_back_id.php",{user:user}).done(function(data){
            
            $('#all-home-container').load('home_pages/profile.php?user='+data);
             window.history.pushState("profile", "profile", "index.php?user="+data);

        });
    }
    
    
    function go_profile_page(user){

        
         
        $.post("classes/Give_back_id.php",{user:user}).done(function(data){
            
            $('#all-home-container').load('home_pages/profile.php?user='+data);
             window.history.pushState("profile", "profile", "index.php?user="+data);

        });
    }
    
</script>