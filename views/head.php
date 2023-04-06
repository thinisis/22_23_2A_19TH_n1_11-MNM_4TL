<?php
require_once "./include/db.php";
?>
<!DOCTYPE html>
<html lang="vi">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="theme-color" content="#2d0877" />
<link rel="icon" type="image/png" href="./img/logos/icon.png" />
<title>Shop linh kiện máy tính</title>
<script src="
https://cdn.jsdelivr.net/npm/sweetalert2@11.7.3/dist/sweetalert2.all.min.js
"></script>
<link href="
https://cdn.jsdelivr.net/npm/sweetalert2@11.7.3/dist/sweetalert2.min.css
" rel="stylesheet">
<link rel="stylesheet" href="./css/site.css" />
<link rel="stylesheet" href="./css/plugins/bootstrap.min.css" />
<link rel="stylesheet" href="./css/plugins/remixicon.css" />
<link rel="stylesheet" href="./css/style1bce.css" />
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<body id="body">
<div class="overflow-hidden">
<div class="bg-gradient-turbo py-10">
<div class="container">
<div class="text-center
			d-flex
			justify-content-between
			space-x-10
			align-items-center
			mobile-responsive-banner">
<div class="space-x-10 d-flex align-items-center">
<p class="text_white">
🏆 Shop máy tính uy tín số 1 CHÂU ÂU!
</p>
</div>
<div class="mode_switcher space-x-10">
<a class="btn btn-dark btn-sm" href="#">Tham gia nhóm FB</a>
<a class="btn btn-dark btn-sm" href="#">Fanpage</a>
</div>
</div>
</div>
</div>
<header class="header__1 js-header black-week">
<div class="container">
<div class="wrapper js-header-wrapper">
<div class="header__logo">
<a href="./">
<img class="header__logo" src="./img/logos/logo_white_color.svg" alt="Turbosmurfs.gg Logo" />
</a>
</div>
<div class="header__menu">
<ul class="d-flex space-x-20">
<li> <a class="color_black" href="./"> Trang chủ</a>
</li>
<li class="has_popup">
<a class="color_black" href="#">Linh kiện </i></a>
</ul>
</div>
<div class="usr_control">
<div id="auth_bar">
	<?php if (is_logged_in() == false) {
		?>
<div class="header__btns">
<a class="btn btn-grad btn-sm" href="login.php"><i class="ri-user-line"></i></a>
</div>	
<?php } else { ?>
<div class="header__avatar">
<div class="price">
<span>Xin chào <b class = "usr_name"><?php echo $_SESSION['name'];?></b><?php echo " | ";  echo $_SESSION['user_coin'] ?> <strong> đ</strong> </span>
</div>
<!-- User avatar -->
<?php if(isset($_SESSION['user_avatar'])){?>
<img class="avatar header-avatar" src="<?php echo $_SESSION['user_avatar'] ?>" alt="avatar">

<?php }else{?>
<img class="avatar header-avatar" src="./img/user.png" alt="avatar">
<?php }?>

<!-- End user avatar -->
</div>
<div class="usr_control mt-2">
<a href="usr_setting.php"><i class="ri-settings-5-fill"></i></a>

<a href="logout.php"><i class="ri-logout-box-r-line"></i></a>
<?php if(isset($_SESSION['permission'])){
	echo '<a href="./admin/	"><i class="ri-admin-fill"></i></a>';
}
?>

</div>
<div class="d-flex space-x-20">
<a href="cart.php"><i class="ri-shopping-cart-2-fill"></i></a>
<?php
session_start();

if (isset($_SESSION['cart'])) {
  $cartItemCount = count($_SESSION['cart']);
} else {
  $cartItemCount = 0;
}
?>
<p>Có <?php echo $cartItemCount; ?> sản phẩm trong giỏ hàng</p>
</div>
</div>
<?php } ?>


</header>
<body>
