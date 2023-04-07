<?php
    $root_path = $_SERVER['DOCUMENT_ROOT'];
    require $root_path."./include/db.php";
    
    $p_id = $_POST['p_id'];
    
    $stmt = $conn->prepare("DELETE FROM product WHERE p_id = :p_id");
    $stmt->bindParam(':p_id', $p_id);
    $stmt->execute();
    
    if ($stmt->rowCount() > 0) {
        $message = 'Product deleted successfully.';
    http_response_code(200);
        } else {
            $message = 'Failed to delete product.';
    http_response_code(500);
        }
    header('Content-Type: application/json');
    echo json_encode(array('message' => $message));
?>