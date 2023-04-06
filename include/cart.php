<?php
function deleteCartItem($id) {
  if (isset($_SESSION['cart'][$id])) {
    unset($_SESSION['cart'][$id]);
    return true;
  } else {
    return false;
  }
}

function updateCartItem($id, $quantity) {
  if (isset($_SESSION['cart'][$id])) {
    $_SESSION['cart'][$id]['quantity'] = $quantity;
    return true;
  } else {
    return false;
  }
}
?>