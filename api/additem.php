<?php
    $root_path = $_SERVER['DOCUMENT_ROOT'];
    require $root_path."./include/db.php";
    session_start();

    // Set the response content type to JSON
    header('Content-Type: application/json');
    
    // Read the request body
    $requestBody = file_get_contents('php://input');
    
    // Decode the JSON payload
    $payload = json_decode($requestBody, true);
    
    // Create a new PDO instance
    
    // Prepare the SQL query
    $stmt = $conn->prepare('INSERT INTO product (p_name, p_type_id, p_brand_id, p_desc, p_price, p_stock, p_tag, p_yearr, p_sale, p_image, p_active) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)');
    
    // Bind the parameters
    $stmt->bindParam(1, $payload['p_name']);
    $stmt->bindParam(2, $payload['p_type_id']);
    $stmt->bindParam(3, $payload['p_brand_id']);
    $stmt->bindParam(4, $payload['p_desc']);
    $stmt->bindParam(5, $payload['p_price']);
    $stmt->bindParam(6, $payload['p_stock']);
    $stmt->bindParam(7, $payload['p_tag']);
    $stmt->bindParam(8, $payload['p_yearr']);
    $stmt->bindParam(9, $payload['p_sale']);
    $stmt->bindParam(10, $payload['p_image']);
    $stmt->bindParam(11, $payload['p_active']);
    try{
    // Execute the query
    if ($stmt->execute()) {
        // Return a success message
        echo json_encode(array('success' => true));
    } else {
        // Return an error message
        echo json_encode(array('error' => 'Failed to insert product.'));
    }
  }
   catch(PDOException $e){
      echo $e;
   }
    
    ?>
    