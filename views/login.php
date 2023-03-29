<div class="edit_profile register">
<div class="container">
<form action="api/login.php" method="post">
<input type="hidden" name="remember_me" value="1"></input>
<input type="hidden" name="_token" value="xiVqzhUVyx4FI7PgcLMcUb8rgGgwS00NaMc1JaTO"> <div class="row">
<div class="col-lg-7"></div>
<div class="col-lg-5">
<div class="right_part space-y-10">
<h1 class="color_white"> Đăng nhập </h1>
<p class="color_white" style="color: white !important">Chưa có tài khoản? <a href="register.php"> Đăng ký ngay </a>
</p>
<div class="box edit_box w-full space-y-20">
<?php
session_start();
if(isset($_SESSION['login_error'])) {
    echo '<div class="alert alert-danger" role="alert">';
    echo '<strong>Oops!</strong> ' . $_SESSION['login_error'] . '<br>';
    echo '</div>';
    unset($_SESSION['login_error']);
}
if(isset($_SESSION['login_message'])) {
    echo '<div class="alert alert-success" role="alert">';
    echo '<strong>Success!</strong> ' . $_SESSION['login_message'] . '<br>';
    echo '</div>';
    unset($_SESSION['login_message']);
}
?>
<div class="space-y-10">
<span class="nameInput">Username </span>
<div class="confirm">
<input type="text" class="form-control" placeholder="Username" name="username" required>
</div>
</div>
<div class="space-y-10">
<span class="nameInput">Password</span>
<div class="confirm">
<input type="password" class="form-control" placeholder="Password" name="password" required>
</div>
</div>

<button type="submit" class="btn btn-grad w-full btn-lg ">Đăng nhập</button>
<p class="color_white" style="color: white !important">Quên tài khoản? <a href="/"> Reset Here </a>
</p>
</div>
</div>
</div>
</div>
</form>
</div>
</div>
</div>  
</body>