<?php
    $root_path = $_SERVER['DOCUMENT_ROOT'];
    require $root_path."./include/db.php";
    
    // Get the p_id from the request
    $p_id = $_POST['p_id'];
    
    // Prepare the DELETE statement and execute it
    $stmt = $conn->prepare("DELETE FROM product WHERE p_id = :p_id");
    $stmt->bindParam(':p_id', $p_id);
    $stmt->execute();
    
    // Check if any rows were affected
    if ($stmt->rowCount() > 0) {
        // Product deleted successfully
        $message = 'Product deleted successfully.';
    http_response_code(200);
        } else {
            $message = 'Failed to delete product.';
    http_response_code(500);
        }
    
    // Return the message as JSON
    header('Content-Type: application/json');
    echo json_encode(array('message' => $message));
?>