<?php
$host = "localhost/shop/";
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $allowed_types = array('image/png', 'image/jpeg', 'image/gif');
  if (in_array($_FILES['image']['type'], $allowed_types)) {
    $filename = uniqid() . '.' . pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);
    $upload_path = '../img/uploads/';
    $upload_file = $upload_path . $filename;
    if (move_uploaded_file($_FILES['image']['tmp_name'], $upload_file)) {
      $response = array(
        'status' => 'success',
        'url' => $host.'img/uploads/' . $filename
      );
      header('Content-Type: application/json');
      echo json_encode($response);
    } else {
      $response = array(
        'status' => 'error',
        'message' => 'Failed to upload the image'
      );
      header('Content-Type: application/json');
      echo json_encode($response);
    }
  } else {
    $response = array(
      'status' => 'error',
      'message' => 'Invalid file type, only PNG, JPEG and GIF are allowed'
    );
    header('Content-Type: application/json');
    echo json_encode($response);
  }
} else {
  $response = array(
    'status' => 'error',
    'message' => 'Invalid request method'
  );
  header('Content-Type: application/json');
  echo json_encode($response);
}
?>