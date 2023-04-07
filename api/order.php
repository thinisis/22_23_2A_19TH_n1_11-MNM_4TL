<?php
$root_path = $_SERVER['DOCUMENT_ROOT'];
require $root_path . "./include/db.php";
header('Content-Type: application/json');

$requestBody = file_get_contents('php://input');
$payload = json_decode($requestBody, true);
$o_time = date('Y-m-d H:i:s');
$username = $payload['username'];
$o_price = $payload['o_price'];
$o_status = 1;
$o_note = $payload['note'];
$o_address = $payload['shipAddress'];

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

// Make API call here
session_start();
$root_path = $_SERVER['DOCUMENT_ROOT'];
    require $root_path."./include/db.php";   
    $o_id = $o_id;    
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
echo ("Order inserted successfully!");
?>