<?php
include "./api/getitems.php";
include "./include/format.php";
?>

<link rel="stylesheet" href="https://turbosmurfs.gg/turbosmurfs/css/plugins/bootstrap.min.css" />
<div class="hero_ranking bg_white">
  <div class="container">
    <h1 class="text-center">Giỏ hàng</h1>
    <p class=""><?php echo $_SESSION['username'] ?></p>
  </div>
</div>
<div class="bg_white border-b py-20">
  <div class="container">
    <div class="row justify-content-between align-items-center">
      <div class="col-lg-auto">
        <div class="d-flex space-x-10 align-items-center">
          <ul class="menu_categories space-x-20">
            <li>
              <a href="/account/orders">
                <i class="ri-shopping-bag-line"></i>
                <span> Giỏ hàng </span>
              </a>
            </li>
            <li>
              <a href="/account/inventory">
                <i class="ri-archive-line"></i>
                <span> Đơn hàng của tôi </span>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>
<section class="section ranking mt-100">
  <div class="container">
    <div class="box d-flex table-responsive">
      <table class="table ranking ">
        <thead>
          <tr>
            <th scope="col">
              <span id="cart-col-name">ID</span>
            </th>
            <th scope="col">
              <span id="cart-col-name">Tên sản phẩm</span>
            </th>
            <th scope="col">
              <span id="cart-col-name">Số lượng</span>
            </th>
            <th scope="col">
              <span id="cart-col-name">Đơn giá</span>
            </th>
            <th scope="col">
              <span id="cart-col-name">Thành tiền</span>
            </th>
            <th scope="col">
              <span id="cart-col-name">Cập nhật</span>
            </th>
            <th scope="col">
              <span id="cart-col-name">Xoá</span>
            </th>
          </tr>
        </thead>

<?php
session_start();
$total = 0;
if (isset($_SESSION['cart']) && !empty($_SESSION['cart'])) {
  foreach ($_SESSION['cart'] as $id => $s_item) {
    $items = get_item_by_id($id);
    ?>
    <tbody>
        <th scope="row">
            <span id="cart-row-name"><?php echo $id ?></span>
        </th>
        <th scope="row">
            <a target="_blank" href="./product.php?id=<?php echo $id ?>" id="cart-row-name"><?php echo $items['p_name'] ?></a>
        </th>
        <th scope="row">
            <input id="input-quantity" value="<?php echo $s_item['quantity'] ?>" >
        </th>
        <th scope="row">
         <span id="cart-row-name"> <?php echo formatPrice($s_item['price']) ?></span>
        </th>
        <th scope="row">
            <span id="cart-row-name"><?php echo formatPrice(($s_item['price']*$s_item['quantity'])); $total +=(($s_item['price']*$s_item['quantity'])) ?></span>
        </th>
        <th scope="row">
            <a class="ri-restart-line updateBtn" data-id="<?php echo $id ?>"></a>
        </th>
        <th scope="row">
            <a class="ri-delete-bin-2-fill deleteBtn" data-id="<?php echo $id ?>"></a>
        </th>
    </tbody>
    <?php
  }
  ?>
  <tbody>
        <th scope="row">
            <span id="cart-row-name">Tổng giá trị đơn hàng:</span>
        </th>
        <th scope="row">
           
        </th>
        <th scope="row">
           
        </th>
        <th scope="row">
        
        </th>
        <th scope="row">
            <span id="cart-row-name"><?php echo formatPrice($total) ?></span>
        </th>
    </tbody><?php
} else {
  echo "<p>No items in cart</p>";
}
?>
        
      </table>
    </div>
  </div>
</section>
<div class="cart-checkout">
    <div class="mt-5">
    <div class="d-flex flex-column">
<span class="nameInput mb-10 sm-5">Địa chỉ nhận hàng</span>
<input type="text" class="form-control" value="" name="shipaddress">
</div>
<div class="d-flex flex-column">
<span class="nameInput mb-10 sm-5">Ghi chú</span>
<input type="text" class="form-control" value="" name="note">
</div>
</div>
<a class="btn btn-primary btn-sm btn_auction w-100 mt-5" href="">Đặt hàng ngay</a>
</div>

<script>
 document.querySelector('.updateBtn').addEventListener('click', function(event) {
    var id = event.target.getAttribute('data-id'); // Get the id from data-id attribute
    var input = event.target.parentNode.parentNode.querySelector('#input-quantity'); // Get the input element
    var quantity = input.value;
  var result = updateCartItem(id, quantity); // Call the updateCartItem() function
  if (result) {
    
  } else {
   
  }
});

// Delete button event listener
document.querySelector('.deleteBtn').addEventListener('click', function(event) {
  var id = event.target.getAttribute('data-id'); // Get the id from data-id attribute
  deleteCartItem(id); // Call the deleteCartItem() function
  console.log("delete clicked");
});
function deleteCartItem(id) {
        Swal.fire({
            title: 'Xác nhận',
            text: "Xoá sản phẩm ID#"+id,
            icon: 'question',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Xác nhận',
            cancelButtonText: 'Huỷ'
            }).then((result) => {
            if (result.isConfirmed) {
                console.log("delete cart called");
    $s_id = id;
    var xhr = new XMLHttpRequest();
    xhr.open('GET', 'api/session_unset.php?s_id='+$s_id, true); // Replace '3' with the actual value of s_id you want to unset
    xhr.onreadystatechange = function() {
    if (xhr.readyState === XMLHttpRequest.DONE) {
    if (xhr.status === 200) {
                Swal.fire(
                'Đã xoá!',
                'Đã xoá sản phẩm',
                'success'
                )
                location.reload();
            }
    } else {
        Swal.fire(
                'Lỗi',
                'Có lỗi xảy ra, vui lòng thử lại',
                'error'
                )
    }
  }
};
xhr.send();
}
)}


function updateCartItem(id, quantity) {
  if (typeof sessionStorage !== 'undefined' && sessionStorage.getItem('cart')) {
    var cart = JSON.parse(sessionStorage.getItem('cart'));
    if (cart[id]) {
      cart[id]['quantity'] = quantity;
      sessionStorage.setItem('cart', JSON.stringify(cart));
      return true;
    } else {
      return false;
    }
  } else {
    return false;
  }
}

</script>