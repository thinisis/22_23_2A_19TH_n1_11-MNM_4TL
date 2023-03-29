<?php
require "./include/session.php";
if(is_logged_in()){
require "./api/logout.php";
}
else{
    header('Location: index.php');
        exit(); 
}
?>