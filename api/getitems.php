<?php
    function get_all_product($page = 1, $limitz = 8){
        $root_path = $_SERVER['DOCUMENT_ROOT'];
        require $root_path."./include/db.php";
    
        $limit = $limitz;
        $offset = ($page - 1) * $limit;
    
        $stmt = $conn->prepare("SELECT p.*, b.brand_name, t.p_type_name FROM product p JOIN brand b ON p.p_brand_id = b.brand_id JOIN product_type t ON p.p_type_id = t.p_type_id WHERE p.p_active = 1 LIMIT :limit OFFSET :offset");
        $stmt->bindValue(':limit', $limit, PDO::PARAM_INT);
        $stmt->bindValue(':offset', $offset, PDO::PARAM_INT);
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
        require $root_path."./include/db.php";       
        $stmt = $conn->prepare("SELECT p.*, b.brand_name, t.p_type_name FROM product p JOIN brand b ON p.p_brand_id = b.brand_id JOIN product_type t ON p.p_type_id = t.p_type_id WHERE p_id = :id");
        
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        
        $stmt->execute();
        
        $item = $stmt->fetch(PDO::FETCH_ASSOC);
        
        if ($item) {
            return $item;
        } else {

          echo "No records found.";
        }
    }
    function get_type(){
        $root_path = $_SERVER['DOCUMENT_ROOT'];
        require $root_path."./include/db.php";       
        $stmt = $conn->prepare("SELECT * FROM product_type");
        

        
        $stmt->execute();
        
        $types = $stmt->fetchAll(PDO::FETCH_ASSOC);
        
        if (count($types) > 0 ) {
            return $types;
        } else {

          echo "No records found.";
        }
    }
    function get_brand(){
        $root_path = $_SERVER['DOCUMENT_ROOT'];
        require $root_path."./include/db.php";       
        $stmt = $conn->prepare("SELECT * FROM brand");
        

        $stmt->execute();
        
        $brands = $stmt->fetchAll(PDO::FETCH_ASSOC);
        
        if (count($brands) > 0 ) {
            return $brands;
        } else {

          echo "No records found.";
        }
    }
?>