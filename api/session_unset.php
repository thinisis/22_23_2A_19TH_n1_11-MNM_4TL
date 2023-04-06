<?php
try{
    if(!isset($_GET['s_id'])){
        exit();
    }
    else{
        session_start();
        $id = $_GET['s_id'];
        unset($_SESSION["cart"][$id]);
        http_response_code(200);
        echo 'Session variable set to null';
    }
} catch(Exception $e){
    http_response_code(500);
    echo $e;
}
?>