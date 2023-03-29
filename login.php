<?php
require "./include/session.php";
if(is_logged_in()){
    header('Location: index.php');
}
else{
    require "./views/head.php";
    require "./views/login.php";
    require "./views/foot.php";
}
?>