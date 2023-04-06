<?php
session_start();
$root_path = $_SERVER['DOCUMENT_ROOT'];
    require $root_path."./include/db.php";   
    $o_id = $_GET['id'];    
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
?>