<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST' ) {
  $allowed_types = array('image/png', 'image/jpeg', 'image/gif','image/webp');
  if (in_array($_FILES['image']['type'], $allowed_types)) {
    $filename = uniqid() . '.' . pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);
    $upload_path = '../img/uploads/';
    $upload_file = $upload_path . $filename;
    if (move_uploaded_file($_FILES['image']['tmp_name'], $upload_file)) {
      chmod($upload_file, 0777); // grant full permission to everyone on the uploaded file
      http_response_code(200);
      $response = array(
        'status' => 'success',
        'img' =>  $filename
      );
      header('Content-Type: application/json');
      echo json_encode($response);
    } else {
      http_response_code(500);
      $response = array(
        
        'status' => 'error',
        'message' => 'Failed to upload the image'
      );
      header('Content-Type: application/json');
      echo json_encode($response);
    }
  } else {
    http_response_code(500);
    $response = array(
      'status' => 'error',
      'message' => 'Invalid file type, only PNG, JPEG and GIF are allowed'
    );
    header('Content-Type: application/json');
    echo json_encode($response);
  }
} else {
  http_response_code(500);
  $response = array(
    'status' => 'error',
    'message' => 'Invalid request method'
  );
  header('Content-Type: application/json');
  echo json_encode($response);
}
?>
