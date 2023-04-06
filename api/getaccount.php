<?php
    function get_all_account(){

    $root_path = $_SERVER['DOCUMENT_ROOT'];
    require $root_path."./include/db.php";
    $stmt = $conn->prepare("SELECT * from account");
    $stmt->execute();

    $accounts = $stmt->fetchAll(PDO::FETCH_ASSOC);

    if (count($accounts) > 0 ) {
        return $accounts;
    } else {
        echo "No records found or not have permission";
    }
    }
    
?>