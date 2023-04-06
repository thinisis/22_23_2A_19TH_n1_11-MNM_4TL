<?php
include "./api/getitems.php";
include "./include/format.php";
$username = $_SESSION['username'];
?>

<link rel="stylesheet" href="https://turbosmurfs.gg/turbosmurfs/css/plugins/bootstrap.min.css" />
<div class="hero_ranking bg_white">
  <div class="container">
    <h1 class="text-center">Giỏ hàng</h1>
    <p class=""><?php echo $username ?></p>
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
<input type="text" class="form-control" value="" id="shipaddress">
</div>
<div class="d-flex flex-column">
<span class="nameInput mb-10 sm-5">Ghi chú</span>
<input type="text" class="form-control" value="" id="ordernote">
</div>
</div>
<a class="btn btn-primary btn-sm btn_auction w-100 mt-5 btnDatNgay">Đặt hàng ngay</a>
</div>

<script>

document.querySelector('.btnDatNgay').addEventListener('click', function(event) {
    saveOrderData();
});

 document.querySelector('.updateBtn').addEventListener('click', function(event) {
    var id = event.target.getAttribute('data-id'); 
    var input = event.target.parentNode.parentNode.querySelector('#input-quantity'); 
    var quantity = input.value;
  var result = updateCartItem(id, quantity); 
  if (result) {
    
  } else {
   
  }
});


document.querySelector('.deleteBtn').addEventListener('click', function(event) {
  var id = event.target.getAttribute('data-id'); 
  deleteCartItem(id); 
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
    xhr.open('GET', 'api/session_unset.php?s_id='+$s_id, true);
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

function saveOrderData() {
  var o_price = <?php echo $total ?>;
  var shipAddress = document.getElementById("shipaddress").value;
  var note = document.getElementById("ordernote").value;
  var username = "<?php echo $username ?>";
console.log(o_price);
  var xhr = new XMLHttpRequest();

  xhr.open("POST", "./api/order.php", true);
  xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
  xhr.onreadystatechange = function() {
    if (xhr.readyState === XMLHttpRequest.DONE) {
      if (xhr.status === 200) {
        var response = JSON.parse(xhr.responseText);
        console.log(response);
      } else {
        console.error("Error saving order data:", xhr.statusText);
      }
    }
  };

  var data = JSON.stringify({
    username : username,
    o_price: o_price,
    shipAddress: shipAddress,
    note: note,
  });

  xhr.send(data);
}

</script>