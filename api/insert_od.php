<?php
$root_path = $_SERVER['DOCUMENT_ROOT'];
require $root_path . "./include/db.php";
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $cartJson = file_get_contents('php://input');
    $cartArray = json_decode($cartJson, true);

    if (!empty($cartArray)) {
        foreach ($cartArray as $item) {
            $o_p_id = $item['id'];
            $o_p_name = $item['p_name'];
            $o_p_stock = $item['quantity'];
            $o_p_price = $item['price'];
            $stmt = $conn->prepare("INSERT INTO `order_detail` (o_id, od_p_id, od_p_price, od_p_stock)
                        VALUES (:o_id, :od_p_id, :od_p_price, :od_p_stock)");
            $stmt->bindParam(':o_id', $o_id);
            $stmt->bindParam(':od_p_id', $od_p_id);
            $stmt->bindParam(':od_p_price', $od_p_price);
            $stmt->bindParam(':od_p_stock', $od_p_stock);
            $stmt->execute();
        }
        $response = array('status' => 'success', 'message' => 'Data inserted successfully');
        echo json_encode($response);
    } else {
        // Send error response
        $response = array('status' => 'error', 'message' => 'No data received');
        echo json_encode($response);
    }
} else {
    // Send error response for invalid request method
    $response = array('status' => 'error', 'message' => 'Invalid request method');
    echo json_encode($response);
}
?>