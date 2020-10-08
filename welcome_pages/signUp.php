<div id="regi">
          
          <h2>Register Now and <br>Make Your Own OTT Platform. </h2>
<!--          <p>Watch documentries, shows, movies shared by the community.</p>-->
          <p>Watch documentries, shows, movies and share your own content around the world, Register Now. </p>
          
<!--          <form  method="post">-->
              <h7 class='err_msg <?php echo str_replace(" ","_",Errors::$emailValid); ?>' ></h7>
              <h7 class='err_msg <?php echo str_replace(" ","_",Errors::$emailExists); ?>'></h7>

         
              <input type="text" name="email" id="email" placeholder="enter your email address">
              <h7 class='err_msg <?php echo str_replace(" ","_",Errors::$usernameLength); ?>'></h7>
              <h7 class='err_msg <?php echo str_replace(" ","_",Errors::$usernameExists); ?>'></h7>
    

              <input type="text" name="username" id="username" placeholder="enter a channel name">
              
              <h7 class='err_msg <?php echo str_replace(" ","_",Errors::$passwordLength); ?>'></h7>
              
              <input type="password" name="password" id="password" placeholder="enter password">
              
              <input type="submit" name="register" value="Register" id="register">
              
<!--          </form>-->
         
</div>
         
