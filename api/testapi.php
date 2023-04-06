<?php
   
        $root_path = $_SERVER['DOCUMENT_ROOT'];
        require $root_path."/shop/include/db.php";       
        $stmt = $conn->prepare("SELECT * FROM product_type");
        

        
        // Execute query
        $stmt->execute();
        
        // Fetch item
        $types = $stmt->fetch(PDO::FETCH_ASSOC);
        
        if (count($types) > 0 ) {
            echo json_encode($types) ;
        } else {

          echo "No records found.";
        }
?>