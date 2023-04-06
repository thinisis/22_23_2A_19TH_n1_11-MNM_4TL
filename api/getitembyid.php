<?php
    $data = json_decode(file_get_contents('php://input'), true);
    $p_id = $_GET['p_id'];

    $root_path = $_SERVER['DOCUMENT_ROOT'];
    require $root_path."./include/db.php";       
    $stmt = $conn->prepare("SELECT p.*, b.brand_name, t.p_type_name FROM product p JOIN brand b ON p.p_brand_id = b.brand_id JOIN product_type t ON p.p_type_id = t.p_type_id WHERE p_id = :id");
    
    $stmt->bindParam(':id', $p_id, PDO::PARAM_INT);
    
    // Execute query
    $stmt->execute();
    
    // Fetch item
    $item = $stmt->fetch(PDO::FETCH_ASSOC);
    
    if ($item) {
        echo json_encode($item);
    } else {

        echo "No records found.";
    }

?>