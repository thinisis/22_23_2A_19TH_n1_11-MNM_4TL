<?php
header('Content-Type: application/json');
$root_path = $_SERVER['DOCUMENT_ROOT'];
require $root_path."./include/db.php";
session_start();

header('Content-Type: application/json');

$requestBody = file_get_contents('php://input');
$data = json_decode($requestBody, true);
$productId =$data['p_id'];
$productName = $data['p_name'];
$productTypeId = $data['p_type_id'];
$productBrandId = $data['p_brand_id'];
$productDescription = $data['p_desc'];
$productPrice = $data['p_price'];
$productStock = $data['p_stock'];
$productTag = $data['p_tag'];
$productYear = $data['p_yearr'];
$productDiscount = $data['p_sale'];
$productImage = $data['p_image'];
$productActive = $data['p_active'];

try {
    $stmt = $conn->prepare('UPDATE product SET 
                            p_name = :p_name,
                            p_type_id = :p_type_id,
                            p_brand_id = :p_brand_id,
                            p_desc = :p_desc,
                            p_price = :p_price,
                            p_stock = :p_stock,
                            p_tag = :p_tag,
                            p_yearr = :p_yearr,
                            p_sale = :p_sale,
                            p_image = :p_image,
                            p_active = :p_active
                            WHERE p_id = :product_id');

    $stmt->bindParam(':p_name', $productName);
    $stmt->bindParam(':p_type_id', $productTypeId);
    $stmt->bindParam(':p_brand_id', $productBrandId);
    $stmt->bindParam(':p_desc', $productDescription);
    $stmt->bindParam(':p_price', $productPrice);
    $stmt->bindParam(':p_stock', $productStock);
    $stmt->bindParam(':p_tag', $productTag);
    $stmt->bindParam(':p_yearr', $productYear);
    $stmt->bindParam(':p_sale', $productDiscount);
    $stmt->bindParam(':p_image', $productImage);
    $stmt->bindParam(':p_active', $productActive);
    $stmt->bindParam(':product_id', $productId); 

    $stmt->execute();

    $response = array('status' => 'success', 'message' => 'Product updated successfully');
    echo json_encode($response);
} catch (PDOException $e) {
    $response = array('status' => 'error', 'message' => 'Failed to update product: ' . $e->getMessage());
    echo json_encode($response);
}
?>