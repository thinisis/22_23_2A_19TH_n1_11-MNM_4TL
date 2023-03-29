<?php
require "./include/session.php";
if(is_logged_in()){
require "./views/head.php";
require "./views/usr_profile.php";
require "./views/foot.php";
}
else{
    header('Location: 404.html');
        exit(); 
}
?>