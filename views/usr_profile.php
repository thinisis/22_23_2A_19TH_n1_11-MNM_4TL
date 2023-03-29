<?php session_start() ?>
<div class="edit_profile">
<div class="mb-50">
<div class="hero__profile">
<div class="tabs">
<nav aria-label="breadcrumb">
<ol class="breadcrumb default mb-0">
<li class="breadcrumb-item"><a href="#">Home</a></li>
<li class="breadcrumb-item active" aria-current="page">Account Settings</li>
</ol>
</nav>
</div>
<div class="cover">
<img src="./img/bg.jpg" alt="cover">
</div>
</div>
</div>
<div class="container">
<div>
<form action="#" method="post" enctype="multipart/form-data">
    <div class="avatars space-x-20 mb-30">
<div id="profile-container">
<img id="profileImage" src="<?php echo $_SESSION['user_avatar'] ?>" alt="Avatar" class="avatar avatar-lg border-0">
</div>
<div class="space-x-10 d-flex">
<div id="boxUpload">
<a href="#" class="btn btn-dark">
Tải ảnh mới </a>
<input id="imageUpload" type="file" accept="image/png, image/gif, image/jpeg" name="avatar" placeholder="" onchange="onFileSelected(event)">
</div>
<a id="delete" href="javascript:;" class="btn btn-white d-none"> Undo </a>
</div>
</div>
<div class="box edit_box col-lg-9 space-y-30">
<div class="row sm:space-y-20">
<div class="col-lg-6 account-info">
<h3 class="mb-20">Account info</h3>
<div class="form-group space-y-10 mb-0">
<div class="space-y-40">
<div class="space-y-10">
<span class="nameInput">Display name</span>
<input type="text" class="form-control" value="<?php echo $_SESSION['name'] ?>" name="name" required="">
</div>
<div class="space-y-10">
<span class="nameInput">Email</span>
<input type="email" class="form-control" value="<?php echo $_SESSION['user_email'] ?>" name="email" required="">
</div>
</div>
</div>
</div>
<div class="col-lg-6 social-media">
<h3 class="mb-20">Thay đổi mật khẩu</h3>
<div class="form-group space-y-10">
<div class="space-y-40">
<div class="d-flex flex-column">
<span class="nameInput mb-10">Mật khẩu hiện tại</span>
<input type="password" class="form-control" value="" name="pwd">
</div>
<div class="d-flex flex-column">
<span class="nameInput mb-10">Mật khẩu mới</span>
<input type="password" class="form-control" value="" name="npwd">
</div>
<div class="d-flex flex-column">
<span class="nameInput mb-10">Nhập lại mật khẩu mới</span>
<input type="password" class="form-control" value="" name="rnpwd">
</div>
<div class="d-flex flex-column">
<span class="nameInput mb-10">User ID</span>
<input type="text" class="form-control" placeholder="" name="usrid" disabled value="<?php echo $_SESSION['user_id']?>">
</div>
</div>
</div>
</div>
</div>
<div class="hr"></div>
<div><button type="submit" class="btn btn-grad">Cập nhật</button></div>
</div>
</form>
</div>
</div>
</div>
<script>
    let avatar = '<?php echo $_SESSION['user_avatar']  ?>';
    function onFileSelected(event) {
    var selectedFile = event.target.files[0];
    var reader = new FileReader();

    var imgtag = document.getElementById("profileImage");
    imgtag.title = selectedFile.name;

    reader.onload = function(event) {
        imgtag.src = event.target.result;
    };

    reader.readAsDataURL(selectedFile);

    $("#delete").removeClass('d-none');
    }

    $("#delete").click(function() {
        $("#profileImage").attr('src', avatar);
        $("#imageUpload").attr('value', '');
        $(this).addClass('d-none');
    });
</script>