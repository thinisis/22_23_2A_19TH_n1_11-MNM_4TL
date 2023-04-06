<?php
require "./include/session.php";
if(!isset($_SESSION['user_id'])){
    header('Location: index.php');
}
else{
    require "./views/head.php";
    require "./views/cart.php";
    require "./views/foot.php";
}
?>