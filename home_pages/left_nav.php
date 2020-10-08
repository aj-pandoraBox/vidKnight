<div class="left-contain-home-box">
           <span onclick="season_destroy_function('<?php echo $_SESSION['userLoggedIn']; ?>')" class="close-logout"><ion-icon name="close-circle-sharp"></ion-icon></span>
           
           
           <span class="expand-screen-logo" id='on-expand'><ion-icon name="chevron-up-circle-sharp"></ion-icon></span>
           
         <span class="expand-screen-logo" id='off-expand' style="display:none"><ion-icon name="chevron-down-circle-sharp"></ion-icon></span>
       
       
       
<!--        <input type="text" placeholder='Search' class="input-search-item">-->
        <nav>
            
            <ul>
                
               
                <li  id='discover-nav-li' onclick="openDisover()"><span class="ic-nav"><ion-icon name="star-half-sharp"></ion-icon></span> Discover</li>
                
                
                 <li  id='search-nav-li' onclick="openSearch()"><span class="ic-nav"><ion-icon name="search-sharp"></ion-icon></span> Search</li>
                
                
                
                <li id='home-user-nav-li' onclick="openHomeUser()"><span class="ic-nav"><ion-icon name="home-sharp"></ion-icon></span>Home</li>
                
                <li onclick="openTvshow()" id='tv-show-nav-li'><span class="ic-nav"><ion-icon name='tv-sharp'></ion-icon></span> Tv-shows</li>
                
                <li onclick="openMovie()" id="movie-nav-li"><span class="ic-nav"><ion-icon name='videocam-sharp'></ion-icon></span> Movies</li>
                
                 
                   <li onclick="openUpload()" id="upload-nav-li"><span class="ic-nav"><ion-icon name="add-circle-sharp"></ion-icon></span> Studio</li> 
                   
                   
                   <li onclick="openUserProfile('<?php echo $_SESSION['userLoggedIn']; ?>')" id="profile-nav-li"><span class="ic-nav"><ion-icon name="person-sharp"></ion-icon></span> Profile</li>
                
            </ul>
            
        </nav>
        
    </div>
    
<script>

if(localStorage.getItem("expand-key") == "1")
    {
         $(".contain-the-box").css("transform","scale(1.03)");
         $("#off-expand").show();
         $("#on-expand").hide();
        

    }else{
        
      $(".contain-the-box").css("transform","scale(1)");
        $("#off-expand").hide();
         $("#on-expand").show();

    }
       

$(".expand-screen-logo").click(function(){

    
if(localStorage.getItem("expand-key") == "1")
    {
        localStorage.setItem("expand-key","0");
    $(".contain-the-box").css("transform","scale(1)");
        $("#off-expand").hide();
         $("#on-expand").show();

    }else{
        $("#off-expand").show();
         $("#on-expand").hide();
    localStorage.setItem("expand-key","1");

    $(".contain-the-box").css("transform","scale(1.03)");

    }   
    
});



    
function openTvshow()
    {
         $('#all-home-container').load("home_pages/tv_shows.php");
             window.history.pushState("tv_show", "shows", "index.php?show");

//        $("#tv-show-nav-li").disable = true;

    }
    
function openMovie()
    {
         $('#all-home-container').load("home_pages/movie_watch.php");
             window.history.pushState("movies", "movies", "index.php?movie");

//        $("#tv-show-nav-li").disable = true;

    } 
    
function openDisover()
    {
                 $('#all-home-container').load("home.php");

             window.history.pushState("tv_show", "shows", "index.php");

//        $("#tv-show-nav-li").disable = true;

    }
    
    
function openSearch()
    {
                 $('#all-home-container').load("home_pages/search.php");

             window.history.pushState("search", "search", "index.php?search=1");

//        $("#tv-show-nav-li").disable = true;

    } 
    
    
function openUpload()
    {
                 $('#all-home-container').load("home_pages/upload.php");

             window.history.pushState("upload", "upload", "index.php?upload");

//        $("#tv-show-nav-li").disable = true;

    } 
    
    
function openHomeUser()
    {
                 $('#all-home-container').load("home_pages/home_user.php");

             window.history.pushState("homeUser", "homeUser", "index.php?homeUser");

//        $("#tv-show-nav-li").disable = true;

    }
    
function openUserProfile(user)
    {
               
         
        $.post("classes/Give_back_id.php",{user:user}).done(function(data){
            
            $('#all-home-container').load('home_pages/profile.php?user='+data);
             window.history.pushState("profile", "profile", "index.php?user="+data);

        });
  
    }

    
    
</script>