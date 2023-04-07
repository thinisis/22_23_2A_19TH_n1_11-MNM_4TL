<?php 
include "./include/format.php";
$item;
$id = $_GET['id'];
if(!isset($id)){
  header('Location: product.php');
  exit();
}
else{
  require "./api/getitems.php";
  $item = get_item_by_id($id);
}

if (isset($_GET['action']) && $_GET['action'] == "add") {
  $id = intval($_GET['id']);
  
  if (isset($_SESSION['cart'][$id])) {
    $_SESSION['cart'][$id]['quantity']++;
  } else {
    $stmt = $conn->prepare("SELECT * FROM product WHERE p_id = :id");
    $stmt->bindParam(':id', $id);
    $stmt->execute();
    if ($stmt->rowCount() != 0) {
      $row_s = $stmt->fetch(PDO::FETCH_ASSOC);
      $_SESSION['cart'][$row_s['p_id']] = array(
        "quantity" => 1,
        "price" => $row_s['p_price']
      );
    } else {
      $message = "This product ID is invalid!";
    }
  }
}
?>


<div class="hero_marketplace bg_white">
  <div class="container">
    <h1 class="text-center"><?php echo $item['p_name']; ?></h1>
  </div>
</div>
<div class="container">
  <input type="button" onclick='history.back()' class="btn btn-white btn-sm my-40" value="Quay lại" />
  <div class="item_details">
    <div class="row sm:space-y-20 justify-content-center">
      <div class="col-lg-8">
      <?php 
		if(isset($message)){ 
			echo "<h2>$message</h2>"; 
		} 
	?>
        <div class="space-y-20">
          <div class="row">
            <div class="col-md-5">
              <img class="item_img" src="/img/uploads/<?php echo $item['p_image']; ?>" alt="<?php echo $item['p_name']; ?>">
            </div>
            <div class="col-md-7">
              <h3 style="text-align: center;"><?php echo $item['p_name']; ?></h3>
              <div class="box space-y-10 is__big" style="margin-top:25px;">
                <div class="d-flex justify-content-between">
                  <span class="color-white">Giá</span>
                  <span class="light_bg">
                    <span class="currency_price" data-id="" data-original-price="" data-original-price-usd=""><?php echo formatPrice($item['p_price']); ?></span>
                    <span class="txt_sm color_text">VNĐ</span>
                  </span>
                </div>
                <div class="hr"></div>
                <div class="d-flex justify-content-between">
                  <span class="color-white">Phân loại</span>
                  <span class="light_bg"><?php echo $item['p_type_name']; ?></span>
                </div>
                <div class="hr"></div>
                <div class="d-flex justify-content-between">
                  <span class="color-white">Hãng sản xuất</span>
                  <span class="light_bg"><?php echo $item['brand_name']; ?></span>
                </div>
                <div class="hr"></div>
                <div class="d-flex justify-content-between">
                  <span class="color-white">Năm sản xuất</span>
                  <span class="light_bg"><?php echo $item['p_yearr']; ?></span>
                </div>
              </div>
            </div>
          </div>
          <div class="hr2"></div>
          <div class="text-center">
            <a class="btn btn-primary btn-lg order_now price-button-22"  product-id="<?php echo $id ?>"  href="product.php?action=add&id=<?php echo $id ?>"> 
                Mua ngay</a>
          </div>
          <div class="box">
            <div class="space-y-20">
              <div class="d-flex justify-content-between
                    mb-30_reset">
                <ul class="nav nav-tabs d-flex space-x-10 mb-30" role="tablist">
                  <li class="nav-item">
                    <a class="btn btn-white btn-sm active" data-toggle="tab" href="#tabs-1" role="tab"> Chi tiết</a>
                  </li>
                </ul>
              </div>
              <div class="hr"></div>
              <div class="tab-content">
                <div class="tab-pane active" id="tabs-1" role="tabpanel">
                  <h4>
                    <strong>Giới thiệu về sản phẩm</strong>
                  </h4>
                  <p><?php echo $item['p_desc']; ?></p>
                </div>
                <div class="tab-pane" id="tabs-2" role="tabpanel">
                  <p>No active bids yet. Be the first to make a bid!</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<script>
// Get the modal
var modal = document.getElementById("checkout_modal");
const pageContent = document.querySelector('.page-content');
// Get the button that opens the modal
var btn = document.querySelector(".order_now");

// Get the <span> element that closes the modal
var span = document.querySelector(".close");

// When the user clicks the button, open the modal
btn.addEventListener("click", function() {
  modal.style.display = "block";
  pageContent.classList.add('blur');
});

// When the user clicks on <span> (x), close the modal
span.addEventListener("click", function() {
  modal.style.display = "none";
  pageContent.classList.remove('blur');
});

// When the user clicks anywhere outside of the modal, close it
window.addEventListener("click", function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
    pageContent.classList.remove('blur');
  }
});

</script>