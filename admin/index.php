<?php
session_start();
if(isset($_SESSION['permission'])){
    include "home.php";
}
else{
    header('Location: 404.html');
        exit(); 
}
?>