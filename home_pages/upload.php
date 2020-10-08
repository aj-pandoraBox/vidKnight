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
            <h2>Studio</h2>
            

         
         <div class="links-uploads">
             <ul>
                 <li class="selected-link-upload" id="create-preview-upload">Create a Preview</li>
                 <li id="upload-video-add">Add a Video</li>
                 <li id="upload-video-update">Update a Video</li>
                 <li id="upload-video-delete">Delete</li>
                 
             </ul>
             
         </div>
         
         <?php require_once("../functions/upload_create_part1.php"); ?>
         <?php require_once("../functions/upload_add_part2.php"); ?>
         <?php require_once("../functions/upload_update_part3.php"); ?>
         <?php require_once("../functions/upload_delete_part4.php"); ?>
          
            
            
        </div>


</div>



<script>


    $("li").removeClass("selected-nav-li");
    $("#upload-nav-li").addClass("selected-nav-li");
    $("#upload-nav-li"). prop('onclick',null);
    
    
    
    
   
    $("#input-file-upload-id-thumb").change(function(e){
        var file = e.target.files;
        $("#input-Label-upload-id-thumb").text(file[0].name);
        
    }); 
    
    $("#input-file-upload-id-preview").change(function(e){
        var file = e.target.files;
        $("#input-Label-upload-id-prev").text(file[0].name);
        
    });
    
    
    $("#submit_form_upload_create").submit(function(e){
         $(".error-create-upload").hide();

        e.preventDefault();
        var formdata = new FormData(this);
        var username = '<?php echo $_SESSION['userLoggedIn']; ?>';
        formdata.append("username",username);
        $.ajax({
            url : "functions/upload_create.php",
            type : "POST",
            data : formdata,
            contentType : false,
            processData : false,
            success:function(data){
                console.log(data);
                if(data == "done")
                    {
                        $(".message-create-upload").fadeIn();
                        
                       setTimeout(function(){  
                           
                         $(".message-create-upload").fadeOut();

                         }, 2000); 
               $("#submit_form_upload_create")[0].reset();

                        showdata();
                        
                    }else{
                        
                         $(".error-create-upload").fadeIn();
                         $(".error-create-upload").text(data);
                        console.log(data);

                    }
                
            }
            
        });
        
    });
    
    
    $("#create-preview-upload").click(function(){
        $(".upload-container-elements-create").show();
        $(".upload-container-elements-add").hide();
        $(".upload-container-elements-update").hide();
        $(".upload-container-elements-delete").hide();
         $("li").removeClass("selected-link-upload");
         $(this).addClass("selected-link-upload");
        
        
    });
    
    
    $("#upload-video-add").click(function(){
        $(".upload-container-elements-create").hide();
        $(".upload-container-elements-add").show();
        $(".upload-container-elements-update").hide();
        $(".upload-container-elements-delete").hide();

           $("li").removeClass("selected-link-upload");
         $(this).addClass("selected-link-upload");
    });
    
    
    $("#upload-video-update").click(function(){
        $(".upload-container-elements-update").show();
        $(".upload-container-elements-create").hide();
        $(".upload-container-elements-add").hide();
     $(".upload-container-elements-delete").hide();

           $("li").removeClass("selected-link-upload");
         $(this).addClass("selected-link-upload");
    }); 
    
    
    $("#upload-video-delete").click(function(){
        $(".upload-container-elements-update").hide();
        $(".upload-container-elements-create").hide();
        $(".upload-container-elements-add").hide();
     $(".upload-container-elements-delete").show();

           $("li").removeClass("selected-link-upload");
         $(this).addClass("selected-link-upload");
    });
    
</script>