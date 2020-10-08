 
          <div class="upload-container-elements-add" style="display:none;">
            <form id="submit_form_upload_add">
             
              
              
              <div class="upload-fields">
              <Label>Select a Preview:</Label>
              <select id="select-preview-id-upload-add" class='input-select-upload' name="entity-id-add">
                
              </select>
              </div> 
              
             
             <div class="add-upload-conatiner" style="display:none;">
              <div class="upload-fields">
              <Label>Title of the video: </Label>
              <input type="text" name="title-name-add" id="title-name-add" class='input-text-upload' placeholder="eg:The One Where Monica Gets a Roommate.." required style="margin-left: 41px;">
              </div>
                
              <div class="upload-fields">
              <Label style="margin-right:40px;">Video Description: </Label>
              <input type="text" id='desc-create-add' name="desc-create-add" class='input-text-upload' placeholder="eg:Follow the lives of six reckless adults living in Manhattan.."  style="margin-left: 21px;" required>
              </div>  
              
              <div class="upload-fields">
              <Label>Select a : </Label>

              
              <div class="Label-file-upload-container">   
              <Label  for='video-upload-add' id='input-Label-upload-id-video-add' class='label-file-upload'>VideoFile</Label>
              
              <input  type="file" name="file-upload-video-add" id="video-upload-add" class='input-file-upload' hidden>
              
              </div>
              
              </div> 
               
              <div class='SeasonAndEpisodeContainer' style="display:none;">
              <div class="upload-fields">
              <Label>Season No: </Label>
              <input type="text" name="season-no-add" class='input-text-upload' placeholder="eg:1" style='margin-left: 88px;' >
              </div>
              
              <div class="upload-fields">
              <Label>Episode No: </Label>
              <input type="text" name="episode-no-add" class='input-text-upload' placeholder="eg:2" style='margin-left: 80px;'>
              </div>
                
             </div>
              
            <div class="upload-fields">                 
  
            <input type='submit' id='add-upload-btn' class="upload-btn" value="Add">                 
                       
             <h4 class="message-create-upload" style='display:none;'><ion-icon name="checkmark-circle-sharp"></ion-icon></h4> 
               
               
            <h4 class="error-create-upload" style='display:none;'>Re-check Your filleds</h4>  
                
            </div>  
            
            </div>
            </form>                               
                       
                                                                                            
          </div>
          
          
<script>
   
//setInterval(function(){
//    showdata();
//},3000);
    
showdata();    
var TvOrMovieid;    

function showdata()
{
    $.post("classes/showEntitiesUser.php",{}).done(function(data){
//        alert(data);
//$("#type-id-upload").innerHTML(data);
        $("#select-preview-id-upload-add").html(data);
        
        
    });
}

$('#select-preview-id-upload-add').on('change', function() {
       TvOrMovieid = $(this).children(":selected").attr("id");

    if(TvOrMovieid=='1')
    {
        $(".add-upload-conatiner").show();
        $(".SeasonAndEpisodeContainer").hide();
    }
    else if(TvOrMovieid=='0')
    {
        $(".add-upload-conatiner").show();
        $(".SeasonAndEpisodeContainer").show();
    }else
    {
        $(".add-upload-conatiner").hide();
        $(".SeasonAndEpisodeContainer").hide();
    }
    
});    
    
    
    
    
 $("#submit_form_upload_add").submit(function(e){
       $(".error-create-upload").hide();

        e.preventDefault();
        var formdata = new FormData(this);
        var username = '<?php echo $_SESSION['userLoggedIn']; ?>';
        formdata.append("username",username);
        formdata.append("tvOrMovieId",TvOrMovieid);
          
      $.ajax({
            url : "functions/upload_add.php",
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
                        
                        $("#title-name-add").val("");
                        $("#desc-create-add").val("");
                        
                    showdata2();
                    }else
                        {
                         $(".error-create-upload").fadeIn();
                         $(".error-create-upload").text(data);
                         $(".message-create-upload").hide();

                        }
                
            }
            
        });
     
        
    });
    
 
 
    $("#video-upload-add").change(function(e){
        var file = e.target.files;
        $("#input-Label-upload-id-video-add").text(file[0].name);
        
    }); 
  

</script>           
          
      