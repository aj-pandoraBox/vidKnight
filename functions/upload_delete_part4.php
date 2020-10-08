 
          <div class="upload-container-elements-delete" style="color:#fff;display:none">
            
             
              
              
              <div class="upload-fields">
              <Label>Select a Preview:</Label>
              <select id="select-preview-id-upload-delete" class='input-select-upload' name="entity-id-update">
                
              </select>
               
              
              </div> 
              
                 <button class="del-btn-upload" style="display:none;">Delete the preview</button>

             
                                          
                       
    
            <div class="load-delete">
             
             
<!--
                            <div class="load-delete-contents">

                            <div class='load-delete-elements'>
                            <h7>Season 1</h7>    
                            </div>

                            <div class='load-delete-content-element'>
                            <img src='entities/thumbnails/2012.jpg' id='$id'>
                            <h4 >name of the title</h4>
                            <p>Season 1 Ep 1</p>
                            <button>Delete</button>
                            </div> 



                            </div>
-->

          
          </div>
          
          </div>
          
<script>
showdata3();    
var TvOrMovieid;    

function showdata3()
{
    $.post("classes/showEntitiesUser.php",{}).done(function(data){
//        alert(data);
//$("#type-id-upload").innerHTML(data);
        $("#select-preview-id-upload-delete").html(data);
        
        
    });
}
    
    
$('#select-preview-id-upload-delete').on('change', function() {
       TvOrMovieid = $(this).children(":selected").attr("id");

    
    
    if(TvOrMovieid=='1')
    {
        
           var entityId = $("#select-preview-id-upload-delete").val();
        
            $.post("classes/upload_delete.php",{movie:'1',entityId:entityId}).done(function(data)
            {
                $(".del-btn-upload").show();
            $(".load-delete").html(data);
                
            });
    
    }
    else if(TvOrMovieid=='0')
    {
                var entityId = $("#select-preview-id-upload-delete").val();

         $.post("classes/upload_delete.php",{tv:'1',entityId:entityId}).done(function(data)
            {
            
                             $(".del-btn-upload").show();

            $(".load-delete").html(data);
//                     console.log(data);                        
                      
            });

    }else
    {
                        $(".del-btn-upload").hide();

        $(".load-delete").html("");
    }
    
});    
    
    
    
function del_content_show(id){
    
      $.post("classes/upload_delete.php",{delIdVideo:id}).done(function(data)
            {
                var entityId = $("#select-preview-id-upload-delete").val();

         $.post("classes/upload_delete.php",{tv:'1',entityId:entityId}).done(function(data)
            {
            
            $(".load-delete").html(data);
//                     console.log(data);                        
                      
            });                     
                      
            });
}  
    
function del_content_movie(id){
    
      $.post("classes/upload_delete.php",{delIdVideo:id}).done(function(data)
            {
                var entityId = $("#select-preview-id-upload-delete").val();
        
            $.post("classes/upload_delete.php",{movie:'1',entityId:entityId}).done(function(data)
            {
            $(".load-delete").html(data);
            });
          
                      
            });
} 
    
$(".del-btn-upload").click(function(){
     var entityId = $("#select-preview-id-upload-delete").val();

    $.post("classes/upload_delete.php",{delIdEnity:entityId}).done(function(data)
            {
                
          showdata3(); 
        showdata2(); 
        showdata(); 
                                $(".del-btn-upload").hide();

                    $(".load-delete").html("");
        console.log(data);

                      
    });
    
});    
    
</script>           
          
      