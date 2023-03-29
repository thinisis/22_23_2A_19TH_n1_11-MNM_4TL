<?php
$root_path = $_SERVER['DOCUMENT_ROOT'];
if(is_logged_in() == true){
        destroy_session();
        header('Location: index.php');
        exit();
}
        header('Location: index.php');
       
?>