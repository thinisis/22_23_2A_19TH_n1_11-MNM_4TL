<?php 
$item;
$id = $_GET['id'];
if(!isset($id)){
  header('Location: index.php');
  exit();
}
else{
  require "./api/getitems.php";
  $item = get_item_by_id($id);
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
        <div class="space-y-20">
          <div class="row">
            <div class="col-md-5">
              <img class="item_img" src="<?php echo $item['p_image']; ?>" alt="<?php echo $item['p_name']; ?>">
            </div>
            <div class="col-md-7">
              <h3 style="text-align: center;"><?php echo $item['p_name']; ?></h3>
              <div class="box space-y-10 is__big" style="margin-top:25px;">
                <div class="d-flex justify-content-between">
                  <span class="color-white">Giá</span>
                  <span class="light_bg">
                    <span class="currency_price" data-id="" data-original-price="" data-original-price-usd=""><?php echo $item['p_price']; ?></span>
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
            <a class="btn btn-primary btn-lg order_now price-button-22" max="10" data-slug="50000-blue-essence-smurf-eune" data-region="EUNE" product-id="22" product-name="50,000+ Blue Essence Unranked Smurf - EUNE" unit-price="8.18" data-category="EUNE" href="javascript:;" data-toggle="modal" data-target="#checkout_modal"> 
                Buy Now</a>
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
<div class="modal fade popup show" id="checkout_modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-modal="true" role="dialog" style="display: none; padding-right: 5px;" aria-hidden="true">
  <div class="modal-dialog  modal-dialog-centered">
    <div class="modal-content">
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">×</span>
      </button>
      <form id="checkout_form" class="contact-form" action="https://turbosmurfs.gg/checkout" method="post">
        <input id="method" type="hidden" name="method" value="visa">
        <div class="tab-content" id="myTabContent">
          <div class="first_step tab-pane fade show active" id="tab1" role="tabpanel" aria-labelledby="tab--1">
            <div class="modal-body space-y-20 p-40">
              <div class="row pb-2" id="coupon_area">
                <div class="col-12">
                  <div class="apply-coupon">
                    <h3>Apply Coupon</h3>
                    <p class="pb-2">Enter your coupon code here below</p>
                    <div class="coupon-form">
                      <div class="row align-items-center">
                        <div class="col-md-6">
                          <input id="coupon" class="form-control mb-3 mb-sm-0 coupon" type="text" name="coupon" placeholder="Coupon Code">
                        </div>
                        <div class="col-md-6">
                          <button id="apply_coupon" class="btn btn-primary ml-0 ml-sm-3" type="button">Apply Coupon</button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="hr"></div>
              </div>
              <h3 id="product_name">50,000+ Blue Essence Unranked Smurf - EUW</h3>
              <div class="alert alert-warning font-size-12 skin-warning" style="display:none;" role="alert">
                <strong>Note</strong> The account only contains the Skin Shard not the Skin itself! You need to use the orange essence to unlock it. It's not guaranteed that you will have enough, but very likely.
              </div>
              <div class="d-flex justify-content-between">
                <p>Blue Essence:</p>
                <p class="text-right color_black txt _bold">
                  <span id="current_be">50000</span>+ BE
                </p>
              </div>
              <div class="d-flex justify-content-between">
                <p>Price Per Account:</p>
                <p class="text-right color_black txt _bold">
                  <span class="currency_symbol">€</span>
                  <span id="unit_price">8.18</span>
                </p>
              </div>
              <div class="d-flex justify-content-between">
                <p>Region/Server:</p>
                <p class="text-right color_black txt _bold" id="current_region">Europe West (EUW)</p>
              </div>
              <div class="d-flex justify-content-between skin-info" style="display:none!important;">
                <p>Skin:</p>
                <p class="text-right color_black txt _bold" id="current_skin"></p>
              </div>
              <div class="d-flex justify-content-between skin-info" style="display:none!important;">
                <p>Skin Tier:</p>
                <p class="text-right color_black txt _bold" id="skin_tier"></p>
              </div>
              <div class="d-flex justify-content-between">
                <p>Warranty:</p>
                <p class="text-right color_black txt _bold" id="warranty"> Lifetime</p>
              </div>
              <div class="quantity-area">
                <div class="hr"></div>
                <div class="space-y-10 pt-2">
                  <span class="nameInput">Quantity</span>
                  <input id="quantity" class="form-control qty-text w-100" type="number" min="1" max="10" name="quantity" value="1" required="">
                </div>
              </div>
              <input type="hidden" name="_token" value="Z8b8j7ayHgGQn2KCEsdNHvimqn25I26MQBEZr7cV">
              <input id="product_id" type="hidden" name="product_id" value="19">
              <input id="skin_id" type="hidden" name="skin_id" value="">
            </div>
            <div class="modal-footer nav nav-tabs" role="tablist">
              <a class="btn wizard-button btn-primary w-100 continue-checkout" data-toggle="tab" href="#tab2" role="tab">Continue ( <span class="currency_symbol">€</span>
                <span id="total">81.8</span>) </a>
            </div>
          </div>
          <div class="second_step tab-pane fade" id="tab2" role="tabpanel" aria-labelledby="tab--2">
            <div class="modal-body  space-y-20 p-40">
              <div class="row">
                <div class="col-12">
                  <div class="space-y-10">
                    <span class="nameInput">Delivery Email</span>
                    <input type="email" class="form-control" placeholder="Email Address" name="email" required="">
                  </div>
                  <div class="space-y-10">
                    <span class="nameInput">Payment Currency</span>
                    <select name="currency" required="">
                      <option value="EUR">Euro (€)</option>
                      <option value="USD">USD ($)</option>
                    </select>
                  </div>
                  <div class="row py-2">
                    <div class="col-md-2 d-flex align-items-center">
                      <input type="checkbox" id="switch1" name="newsletter" checked="">
                      <label for="switch1">Toggle</label>
                    </div>
                    <div class="col-md-10">
                      <span class="color_text">⚡ Do you want to receive <strong>free coupons, lootbox openings and offers</strong> from us? ⚡ </span>
                    </div>
                  </div>
                  <div class="payment-methods text-center">
                    <div class="payment-method active" data-payment-method="stripe">
                      <div class="icon"></div>
                    </div>
                    <p class="small-note">Note: SEPA &amp; Klarna/Sofort payments can take up to 3 days to be processed.</p>
                    <div class="payment-method" data-payment-method="ethereum">
                      <div class="icon"></div>
                    </div>
                    <div class="payment-method" data-payment-method="bitcoin">
                      <div class="icon"></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="modal-footer  nav nav-tabs" role="tablist">
              <button type="button" class="btn btn-primary wizard-button" id="tab--1" data-toggle="tab" href="#tab1" role="tab" aria-controls="tab1" aria-selected="true">Go Back</button>
              <button type="submit" class="btn btn-primary wizard-button checkout">
                <span class="checkout_title">Checkout</span>
              </button>
            </div>
          </div>
        </div>
      </form>
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