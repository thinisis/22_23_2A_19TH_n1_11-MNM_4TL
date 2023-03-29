<?php
require "./include/session.php";
if(!is_logged_in()){
require "./views/head.php";


require "./views/register.php";

require "./views/foot.php";
}
else{
    header('Location: index.php');
        exit(); 
}
?>  