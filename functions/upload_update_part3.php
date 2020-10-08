 
          <div class="upload-container-elements-update" style="color:#fff;display:none">
            <form id="submit_form_upload_update">
             
              
              
              <div class="upload-fields">
              <Label>Select a Preview:</Label>
              <select id="select-preview-id-upload-update" class='input-select-upload' name="entity-id-update">
                
              </select>
              </div> 
              
             
             <div class="update-upload-conatiner" style="display:none"; >
              <div class="upload-fields">
              <Label>Title of the video: </Label>
              <input type="text" name="title-name-update" id="title-name-update" class='input-text-upload' required style="margin-left: 41px;">
              </div>
                
              <div class="upload-fields">
              <Label style="margin-right:40px;">Video Description: </Label>
              <input type="text" id='desc-create-update' name="desc-create-update" class='input-text-upload'   style="margin-left: 21px;" required>
              </div>  
              
              <div class="upload-fields">
              <Label>Select a : </Label>

              
              <div class="Label-file-upload-container">   
              <Label  for='video-upload-update' id='input-Label-upload-id-video-update' class='label-file-upload'>VideoFile</Label>
              
              <input  type="file" name="file-upload-video-update" id="video-upload-update" class='input-file-upload' hidden>
              
              </div>
              
              </div> 
               
              <div class='SeasonAndEpisodeContainer'>
              <div class="upload-fields">
              <Label>Season No: </Label>
              <input type="text" name="season-no-update" class='input-text-upload' placeholder="eg:1" style='margin-left: 88px;' >
              </div>
              
              <div class="upload-fields">
              <Label>Episode No: </Label>
              <input type="text" name="episode-no-update" class='input-text-upload' placeholder="eg:2" style='margin-left: 80px;'>
              </div>
                
             </div>
              
            <div class="upload-fields">                 
  
            <input type='submit' id='update-upload-btn' class="upload-btn" value="Update">                 
                       
             <h4 class="message-create-upload" style='display:none;'><ion-icon name="checkmark-circle-sharp"></ion-icon></h4> 
               
               
            <h4 class="error-create-upload" style='display:none;'>Re-check Your filleds</h4>  
                
            </div>  
            
            </div>
            </form>                               
                       
                                                                                            
          </div>
          
          
<script>

    
$('#select-preview-id-upload-update').on('change', function() {
       TvOrMovieid = $(this).children(":selected").attr("id");

    if(TvOrMovieid=='1')
    {
        $(".update-upload-conatiner").show();
        $(".SeasonAndEpisodeContainer").hide();
    }
    else if(TvOrMovieid=='0')
    {
        $(".update-upload-conatiner").show();
        $(".SeasonAndEpisodeContainer").show();
    }else
    {
        $(".update-upload-conatiner").hide();
        $(".SeasonAndEpisodeContainer").hide();
    }
    
});    
showdata2();    
var TvOrMovieid;    

function showdata2()
{
    $.post("classes/showEntitiesUser.php",{showVid:1}).done(function(data){
//        alert(data);
//$("#type-id-upload").innerHTML(data);
        $("#select-preview-id-upload-update").html(data);
console.log(data);
        
    });
} 
    
  $("#video-upload-update").change(function(e){
        var file = e.target.files;
        $("#input-Label-upload-id-video-update").text(file[0].name);
        
    });  
    

$("#submit_form_upload_update").submit(function(e){
       $(".error-create-upload").hide();

        e.preventDefault();
        var formdata = new FormData(this);
        var username = '<?php echo $_SESSION['userLoggedIn']; ?>';
        formdata.append("username",username);
        formdata.append("tvOrMovieId",TvOrMovieid);
          
      $.ajax({
            url : "functions/upload_update.php",
            type : "POST",
            data : formdata,
            contentType : false,
            processData : false,
            success:function(data){
                console.log(data);
                if(data =='done')
                    {
                        $(".error-create-upload").hide();
                        $(".message-create-upload").fadeIn();

                          setTimeout(function(){  
                         $(".message-create-upload").fadeOut();
                         }, 2000); 
                        
                        $("#title-name-update").val("");
                        $("#desc-create-update").val("");
                        
                    }else
                        {
                         $(".error-create-upload").fadeIn();
                         $(".error-create-upload").text(data);
                         $(".message-create-upload").hide();

                        }
                
            }
            
        });
    console.log(formdata);
     
        
    });
        
    
    
    
</script>           
          
      