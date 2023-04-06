<?php
try {
   require "./include/db.php";

    $o_time = date('Y-m-d H:i:s');
    $username = $_SESSION['username']; 
    $o_price = $_POST['o_price']; 
    $o_status = 1; 
    $o_note = $_POST['o_note']; 
    $o_address = $_POST['o_address']; 

    $stmt = $conn->prepare("INSERT INTO `order` (o_time, username, o_price, o_status, o_note, o_address)
                            VALUES (:o_time, :username, :o_price, :o_status, :o_note, :o_address)");
    $stmt->bindParam(':o_time', $o_time);
    $stmt->bindParam(':username', $username);
    $stmt->bindParam(':o_price', $o_price);
    $stmt->bindParam(':o_status', $o_status);
    $stmt->bindParam(':o_note', $o_note);
    $stmt->bindParam(':o_address', $o_address);
    $stmt->execute();

    $o_id = $conn->lastInsertId();
    foreach ($_SESSION['cart'] as $id => $s_item)
    {
    $od_p_id = $id; 
    $od_p_price = $s_item['price']; 
    $od_p_stock = $s_item['quantity']; 

    $stmt = $conn->prepare("INSERT INTO `order_detail` (o_id, od_p_id, od_p_price, od_p_stock)
                            VALUES (:o_id, :od_p_id, :od_p_price, :od_p_stock)");
    $stmt->bindParam(':o_id', $o_id);
    $stmt->bindParam(':od_p_id', $od_p_id);
    $stmt->bindParam(':od_p_price', $od_p_price);
    $stmt->bindParam(':od_p_stock', $od_p_stock);
    $stmt->execute();
    }
    // Close the database connection
    $conn = null;

    echo "Order inserted successfully!";
} catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>