<?php
    $root_path = $_SERVER['DOCUMENT_ROOT'];
    require $root_path."/shop/include/db.php";
    $user_id = $_GET['delete_id'];

    // prepare and execute the DELETE statement
    $stmt = $conn->prepare("DELETE FROM account WHERE id = :id");
    $stmt->bindParam(':id', $user_id);
    $stmt->execute();

    // check if any rows were affected
    if ($stmt->rowCount() > 0) {
        $response = array("message" => "User with ID $user_id has been deleted.");
    } else {
        $response = array("message" => "User with ID $user_id could not be found.");
    }

    // return response as JSON
    header('Content-Type: application/json');
    echo json_encode($response);
?>
