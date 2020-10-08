<?php
$query2 = $con->prepare("SELECT DISTINCT(entities.id),thumbnail,name FROM `entities` INNER JOIN videos on videos.entityId = entities.id  WHERE type=1 and username='$user_profile'");
$query2->execute();
if($query2->rowCount() !=0)
{
echo "<div class='profile-content-container'>
           <h4>Movies <input type='text' placeholder='type here to search for movies..' id='profile-search-inp-movie'></h4>
                 <div class='show-movie-profile'>

           ";
while($row = $query2->fetch(PDO::FETCH_ASSOC))
{
    $img = $row['thumbnail'];
    $id = $row['id'];
    $name = $row['name'];
    echo "
      
           <div class='profile-container-content-element'>
               <img src=$img onclick='openItemPage($id)'>
               <h5 onclick='openItemPage($id)'>$name</h5>
           </div>
       

           
           
       
    
    ";
}
   
echo "</div></div>";


}





$query3 = $con->prepare("SELECT DISTINCT(entities.id),thumbnail,name FROM `entities` INNER JOIN videos on videos.entityId = entities.id  WHERE type=0 and username='$user_profile'");
$query3->execute();

if($query3->rowCount() !=0)
{
echo "<div class='profile-content-container' style='margin-top:30px;'>
            <h4>Tv-shows <input type='text' placeholder='type here to search for tv-shows..' id='profile-search-inp-tv'></h4>
        <div class='show-tv-profile'>

            
            ";
while($row = $query3->fetch(PDO::FETCH_ASSOC))
{
    $img = $row['thumbnail'];
    $name = $row['name'];
    $id = $row['id'];
    echo "
           <div class='profile-container-content-element'>
               <img src=$img onclick='openItemPage($id)'>
               <h5 onclick='openItemPage($id)'>$name</h5>
           </div>
       

           
           
       
    
    ";
}
   
echo "</div></div>";

}
?>
      

          
            
<script>
$("#profile-search-inp-movie").keyup(function(){
    
    var v1 = $("#profile-search-inp-movie").val();
    
    if(v1!="")
    {
     $.post("classes/profile_searches.php",{v1:v1,userSearch:'<?php echo $user_profile; ?>'}).done(function(data){
         $(".show-movie-profile").html(data);
     });
        
        
    }else{
       
        $.post("classes/profile_searches.php",{reMovie:1,userSearch:'<?php echo $user_profile; ?>'}).done(function(data){
         $(".show-movie-profile").html(data);
     }); 
        
    }
    
});
    
    
$("#profile-search-inp-tv").keyup(function(){
    
    var v2 = $("#profile-search-inp-tv").val();
    
    if(v2!="")
    {
         $.post("classes/profile_searches.php",{v2:v2,userSearch:'<?php echo $user_profile; ?>'}).done(function(data){
         
          $(".show-tv-profile").html(data);
     });
        
        
    }else{
       
        $.post("classes/profile_searches.php",{reShow:0,userSearch:'<?php echo $user_profile; ?>'}).done(function(data){
         $(".show-tv-profile").html(data);
     }); 
        
    }
    
});


</script>   
      
                  
       
          
          
           
           

       
       
 