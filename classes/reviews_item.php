  <?php 
$username=$_SESSION['userLoggedIn'];
$query=$con->prepare("select * from users where username=:user");
$query->bindValue(":user",$username);
$query->execute();
$row=$query->fetch(PDO::FETCH_ASSOC);
$userId= $row['id'];
  
        $itemId=$_GET['id'];
        $query=$con->prepare("select * from review where userIdFrom=$userId and entityId=$itemId");
        $query->execute();


?>
   <div class="review-section-profile">
  
    
    
    <div class="review-section-profile-container">
        <h5>reviews</h5>
        

        <h6 onclick='popUpReviewsHide()'><ion-icon name="close-circle-sharp"></ion-icon></h6>
        <div class="reviews-input">
            <textarea placeholder="write your review..."></textarea>
            <button class="reviews-input-btn post" onclick='loadReviews()'>Post</button>
            <button class="reviews-input-btn update" onclick='loadReviews()'>Update</button>
            <button class="reviews-input-btn delete" onclick='deletReview()'>Delete</button>
            
        </div>
        
        <div class="reviews-profile-container">
        <div class="reviews-profile">
           <img src="entities/profile_pic/netflix_1479652834.png">
            <h2>loading</h2>
            <p>loading</p>
            
        </div> 
        
        </div>
        
        
    </div>
    
</div>   
   
 <script>



function popUpReviewsShow()
{
$(".review-section-profile").fadeIn();
}
    
function popUpReviewsHide()
    {
        $(".review-section-profile").fadeOut();
    }
    
    
    
    
function loadReviews()
    {
        var reviewText = $(".reviews-input textarea").val();
        
        if(reviewText != '')
            {
        $.post("classes/reviews-load.php",{review:reviewText,itemId:<?php echo $_GET['id']; ?>}).done(function(data){
            
            if(data=='posted' || data=='updated')
            {
                                           
       loadUpdateReviews();                 
          loadAllReviews();                                 
         $(".reviews-input textarea").val("");                     
                                           
            }
                                           
                                           
        });
                
            }
    }
     
function deletReview()
{
        $.post("classes/reviews-load.php",{delete:1,itemId:<?php echo $_GET['id']; ?>}).done(function(data){
            
            if(data=='deleted')
            {
                                           
        $(".reviews-input-btn.post").show();
         $(".reviews-input-btn.update").hide();
         $(".reviews-input-btn.delete").hide();                    
                loadAllReviews();                           
            }
                                           
                                           
        });
     
    }

     
function loadAllReviews()
     {
        
     
        $.post("classes/reviews-load.php",{load:1,itemId:<?php echo $_GET['id']; ?>}).done(function(data){
            
           $(".reviews-profile-container").html(data); 
        console.log(data);
                
            
        });  
                
                
                
     }
     
 loadAllReviews();    
     
function loadUpdateReviews() 
     {
          $(".reviews-input-btn.post").hide();
         $(".reviews-input-btn.update").show();
         $(".reviews-input-btn.delete").show();
         
     }
    
    
</script> 

<?php

 if($query->rowCount()>0){
       
    echo  "<script>loadUpdateReviews();</script>";
            
            
        }

?>


