<div class="edit_profile register">
<div class="container">
<form action="api/register.php" method="post">
<div class="row">
<div class="col-lg-7"></div>
<div class="col-lg-5">
<div class="right_part space-y-10">
<h1 class="color_white"> Đăng ký </h1>
<p class="color_white" style="color: white !important">Đã có tài khoản? <a href="login.php"> Đăng nhập ngay </a>
</p>
<?php
session_start();
if(isset($_SESSION['register_error'])) {
    echo '<div class="alert alert-danger" role="alert">';
    echo '<strong>Oops!</strong> ' . $_SESSION['register_error'] . '<br>';
    echo '</div>';
    unset($_SESSION['register_error']);
}
?>
<div class="box edit_box w-full space-y-20">
<div class="space-y-10">
<span class="nameInput">Username </span>
<div class="confirm">
<input type="text" class="form-control" placeholder="Điền vào username" name="username" required>
</div>
</div>
<div class="space-y-10">
<span class="nameInput">Tên </span>
<div class="confirm">
<input type="text" class="form-control" placeholder="Điền vào tên hiển thị" name="name" required>
</div>
</div>
<div class="space-y-10">
<span class="nameInput">Email </span>
<div class="confirm">
<input type="email" class="form-control" placeholder="Điền vào email" name="email" required>
</div>
</div>
<div class="space-y-10">
<span class="nameInput">Mật khẩu</span>
<div class="confirm">
<input type="password" class="form-control" placeholder="Điền vào password" name="password" required>
</div>
</div>
<div class="space-y-10">
<span class="nameInput">Xác nhận mật khẩu</span>
<div class="confirm">
<input type="password" class="form-control" placeholder="Điền vào password một lần nữa" name="password_confirmation" required>
</div>
</div>
<button type="submit" class="btn btn-grad w-full btn-lg "> Đăng ký ngay</button>
</div>
</div>
</div>
</div>
</form>
</div>
</div>
</div>  
</body>