<?php
    function get_all_product(){
        $root_path = $_SERVER['DOCUMENT_ROOT'];
        require $root_path."/shop/include/db.php";
        $stmt = $conn->prepare("SELECT p.*, b.brand_name, t.p_type_name FROM product p JOIN brand b ON p.p_brand_id = b.brand_id JOIN product_type t ON p.p_type_id = t.p_type_id WHERE p.p_active = 1");
        $stmt->execute();
    
        $products = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
        if (count($products) > 0) {
            return $products;
        } else {
            echo "No records found.";
        }
    }
    function get_item_by_id($id){
        $root_path = $_SERVER['DOCUMENT_ROOT'];
        require $root_path."/shop/include/db.php";       
        $stmt = $conn->prepare("SELECT p.*, b.brand_name, t.p_type_name FROM product p JOIN brand b ON p.p_brand_id = b.brand_id JOIN product_type t ON p.p_type_id = t.p_type_id WHERE p_id = :id");
        
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        
        // Execute query
        $stmt->execute();
        
        // Fetch item
        $item = $stmt->fetch(PDO::FETCH_ASSOC);
        
        if ($item) {
            return $item;
        } else {

          echo "No records found.";
        }
    }
    function get_type(){
        $root_path = $_SERVER['DOCUMENT_ROOT'];
        require $root_path."/shop/include/db.php";       
        $stmt = $conn->prepare("SELECT * FROM product_type");
        

        
        // Execute query
        $stmt->execute();
        
        // Fetch item
        $types = $stmt->fetch(PDO::FETCH_ASSOC);
        
        if ($types) {
            return $types;
        } else {

          echo "No records found.";
        }
    }
?>