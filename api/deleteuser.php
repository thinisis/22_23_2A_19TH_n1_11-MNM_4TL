<?php
    $root_path = $_SERVER['DOCUMENT_ROOT'];
    require $root_path."/shop/include/db.php";
    $user_id = $_GET['delete_id'];

    $stmt = $conn->prepare("DELETE FROM account WHERE id = :id");
    $stmt->bindParam(':id', $user_id);
    $stmt->execute();

    if ($stmt->rowCount() > 0) {
        $response = array("message" => "User with ID $user_id has been deleted.");
    } else {
        $response = array("message" => "User with ID $user_id could not be found.");
    }

    header('Content-Type: application/json');
    echo json_encode($response);
?>
