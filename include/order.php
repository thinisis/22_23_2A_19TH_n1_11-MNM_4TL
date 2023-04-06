<?php
    require "db.php";
    session_start();
function addNewOrder($o_id, $o_price, $o_status = 1, $cartItems, $shipAddress, $note)
{
    require "db.php";
    try{
        $conn->beginTransaction();
        $datetime = date('Y-m-d H:i:s');
        $user_n = $_SESSION['username'];
  $sql = "INSERT INTO order (o_id, o_time, username, o_price, o_status, o_note, o_address) VALUES (?, ?, ?, ?, ?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->execute([$o_id, $datetime, $user_n, $o_price, $o_status, $note, $shipAddress]);

  $sql = "INSERT INTO order_detail (o_id, od_p_id, od_p_price, od_p_stock) VALUES (?, ?, ?, ?)";
  $stmt = $conn->prepare($sql);

  foreach ($cartItems as $item) {
    $productId = $item['product_id'];
    $quantity = $item['quantity'];
    $price = $item['price'];

    $stmt->execute([$o_id, $productId, $quantity, $price]);
    }


  $conn->commit();


  return $orderId;
} catch (PDOException $e) {

    $pdo->rollBack();
    throw new Exception("Error adding new order: " . $e->getMessage());
}
}
try {
    $orderId = addNewOrder($o_id, $o_price, $o_status = 1, $cartItems, $shipAddress, $note);

    unset($_SESSION['cart']);

} catch (Exception $e) {
    echo "Error adding new order: " . $e->getMessage();
}
?>