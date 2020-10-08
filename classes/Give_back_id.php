<?php
if(isset($_POST['id']))
{
    echo $_POST['id'];
}

if(isset($_POST['watch_video_id']))
{
    echo $_POST['watch_video_id'];
}

if(isset($_POST['usernameLogout']))
{
    session_start();
    session_destroy();

    echo "done";
    
}

if(isset($_POST['user']))
{
    echo "".$_POST['user']."";
}

?>