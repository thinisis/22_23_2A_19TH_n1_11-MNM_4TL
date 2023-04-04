<?php
require_once "./api/getitems.php";
$products = get_all_product();
?>
<body>
  <div class="hero__1">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-12">
          <div class="hero__left space-y-20 text-center pb-4 pt-5">
            <div class="trusted">
              <div class="avatars -space-x-20" style="display:inline-block;">
                <a href="javascript:;">
                  <img src="https://cdn.discordapp.com/avatars/448715770696826890/a422ea7132040393415227b083256664.jpg" alt="Avatar" class="avatar avatar-sm">
                </a>
                <a href="javascript:;">
                  <img src="https://cdn.discordapp.com/avatars/448715770696826890/a422ea7132040393415227b083256664.jpg" alt="Avatar" class="avatar avatar-sm">
                </a>
                <a href="javascript:;">
                  <img src="https://cdn.discordapp.com/avatars/448715770696826890/a422ea7132040393415227b083256664.jpg" alt="Avatar" class="avatar avatar-sm">
                </a>
              </div>
              <span>Được tin tưởng bởi 5000+ khách hàng</span>
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="space-y-20">
            <h1 class="hero__title"> Mua <span class="gradient">PC, Laptop</span> với giá tốt nhất </h1>
            <p class="txt">Gaming, HI End PC, Laptop</p>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="purchase_wizard">
            <p style="display:block;margin:0 auto;width:100%;text-align:center;padding:5px;background-color:#141721;border-top-right-radius:15px;border-top-left-radius:15px;font-size:12px;margin-bottom:10px;">Lựa chọn nhanh</p>
            <div class="tab-content" id="purchaseWizard" style="padding:25px;">
              <div class="first_step tab-pane fade show active" id="step1" role="tabpanel" aria-labelledby="step--1">
                <h2 class="hero__title pb-4" style="font-size:22px;text-align:center;"> Bạn đang <span class="gradient">tìm kiếm gì?</span>
                </h2>
                <div class="row justify-content-center nav nav-tabs" role="tablist">
                  <div class="col-md-4">
                    <div class="creator_item creator_card quick space-y-10 is_big type_selector" data-type="botted" data-toggle="tab" role="tab" href="#bottedRegion">
                      <div class="avatars flex-column space-y-10">
                        <div class="text-center">
                          <i class="ri-computer-line gradient" style="font-size:36px;"></i>
                          <a href="javascript:;">
                            <p class="avatars_name large color_black">PC</p>
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="creator_item creator_card quick space-y-10 is_big type_selector" data-type="handleveled" data-toggle="tab" role="tab" href="#handleveledRegion">
                      <div class="avatars flex-column space-y-10">
                        <div class="text-center">
                          <i class="ri-macbook-line gradient" style="font-size:36px;"></i>
                          <a href="javascript:;">
                            <p class="avatars_name large color_black">Laptop</p>
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="creator_item creator_card quick space-y-10 is_big type_selector" data-type="ranked" data-toggle="tab" role="tab" href="#region">
                      <div class="avatars flex-column space-y-10">
                        <div class="text-center">
                          <i class="ri-hard-drive-2-line gradient" style="font-size:36px;"></i>
                          <a href="javascript:;">
                            <p class="avatars_name large color_black">Linh kiện</p>
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div id="marquee1" class="marquee blue">
<p>MUA SẮM VÀ NHẬN NGAY ƯU ĐÃI</p>
  </div>
    <div class="container mt-200">
      <div class="seaction mt-100">
        <div class="section__head">
          <h2 class="section__title mb-20"> Sản phẩm tiêu biểu</h2>
        </div>

        <!-- Item -->
        <div class="row mb-30_reset">
        <?php foreach ($products as $product): ?> 
          <div class="col-xl-3 col-lg-6 col-md-6">
            <div class="card__item three">
              <div class="card_body space-y-10">
                <div class="card_head">
                  <img src="<?php echo $product['p_image']; ?>" alt="<?php echo $product['p_name']; ?>">
                  <a href="#" class="likes
                  space-x-3">
                    <span class="txt_sm"> <?php echo $product['p_tag']; ?> </span>
                  </a>
                </div>
                <h6 class="card_title text-center"><a class="color_black wrap" href="#"><?php echo $product['p_name']; ?></a>
                </h6>
                  <div class="action">
                  <a class="btn btn-primary btn-sm btn_auction w-100" href="product.php?id=<?php echo $product['p_id']; ?>">Xem ngay</a>
                </div>
                
                <div class="card_footer d-block
              space-y-10 text-center">
                  <div class="hr"></div>
                  <div class="d-flex
                align-items-center
                space-x-10 text-center">
                    <i class="ri-currency-line"></i>
                    <p class="color_text
                  txt_sm" style="width: auto"> Giá </p>
                    <span class="color_black
                  txt_sm">
                      <span class="currency_symbol">₫</span>
                      <span class="currency_price" data-original-price="<?php echo $product['p_price']; ?>"><?php echo $product['p_price']; ?></span>
                    </span>
                  </div>
                  <div class="d-flex
                align-items-center
                space-x-10">
                    <i class="ri-vip-diamond-fill"></i>
                    <p class="color_text
                  txt_sm" style="width: auto"> Danh mục </p>
                    <span class="color_black
                  txt_sm"><?php echo $product['p_type_name']; ?></span>
                  </div>
                  <div class="d-flex
                align-items-center
                space-x-10">
                    <i class="ri-global-line"></i>
                    <p class="color_text
                  txt_sm" style="width: auto"> Hãng sản xuất </p>
                    <span class="color_black
                  txt_sm"><?php echo $product['brand_name']; ?></span>
                  </div>
                  <div class="d-flex
                align-items-center
                space-x-10">
                    <i class="ri-funds-box-line"></i>
                    <p class="color_text
                  txt_sm" style="width: auto"> Tình trạng </p>
                  <?php if( $product['p_stock'] > 0){ ?>
                    <span class="color_black
                  txt_sm">
                      <strong>Còn hàng</strong></span>
                      <?php } else{ ?>
                        <span class="color_black
                  txt_sm">
                      <strong style="
    color: red;">Hết hàng</strong></span>
                      <?php } ?>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <?php endforeach; ?>

          <!-- End Item -->
        </div>
      </div>
      </div>
</body>