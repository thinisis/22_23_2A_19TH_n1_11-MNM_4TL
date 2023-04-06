<?php
function formatPrice($price) {
    $formattedPrice = number_format($price, 0, ',', '.') . " đ";
    return $formattedPrice;
  }
?>