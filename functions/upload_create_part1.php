 
          <div class="upload-container-elements-create">
            <form id="submit_form_upload_create">
              <div class="upload-fields">
              <Label>Name Of The Preview: </Label>
              <input type="text" name="title-name-create" class='input-text-upload' placeholder="eg:Friends.." required>
              </div>
                
              <div class="upload-fields">
              <Label style="margin-right:40px;">Preview Description: </Label>
              <input type="text" name="desc-create" class='input-text-upload' placeholder="eg:Follow the lives of six reckless adults living in Manhattan.." required>
              </div>  
              
              <div class="upload-fields">
              <Label>Select a : </Label>

              
              <div class="Label-file-upload-container">
              <Label for='input-file-upload-id-thumb' id='input-Label-upload-id-thumb' class='label-file-upload'>Video Thumbnail</Label>
              
              <input type="file" name="file-upload-thumbnail" id='input-file-upload-id-thumb' class='input-file-upload' hidden>
             
              
             
              <Label  for='input-file-upload-id-preview' id='input-Label-upload-id-prev' class='label-file-upload'>Preview For Your video</Label>
              
              <input  type="file" name="file-upload-preview" id="input-file-upload-id-preview" class='input-file-upload' hidden>
              
              </div>
              
              </div>  
              
              <div class="upload-fields">
              <Label>Select a Type:</Label>
              <select id="type-id-upload" class='input-select-upload' name="type-create">
                  <option value="0">Tv-Show</option>
                  <option value="1">Movie</option>
              </select>
              </div> 
              
               
                
            <div class="upload-fields">
              <Label>Select a Category:</Label>
              <select id="cat-id-upload" class='input-select-upload' name='cat-create'>
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
              </div>   
              
            <div class="upload-fields">                 
  
            <input type='submit' id='create-upload-btn' class="upload-btn" value="Create">                 
                       
             <h4 class="message-create-upload" style='display:none;'><ion-icon name="checkmark-circle-sharp"></ion-icon></h4> 
               
               
            <h4 class="error-create-upload" style='display:none;'>Re-check Your filleds</h4>  
                
            </div>  
            
            </form>                               
                                                                                                         
          </div>