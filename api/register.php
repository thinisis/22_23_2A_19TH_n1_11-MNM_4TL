<?php
    session_start();
    $root_path = $_SERVER['DOCUMENT_ROOT'];
    require_once $root_path."./include/db.php";

    if (!isset($_POST['username'], $_POST['password'], $_POST['password_confirmation'], $_POST['name'], $_POST['email'])) {
        $_SESSION['register_error'] = 'Hãy điền đầy đủ vào các trường!';
        header('Location: ../register.php');
        exit(); 
    }

    $username = $_POST['username'];
    $password = $_POST['password'];
    $repassword = $_POST['password_confirmation'];
    $name = $_POST['name'];
    $email = $_POST['email'];

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $_SESSION['register_error'] = 'Hãy điền email đúng định dạng!';
        header('Location: ../register.php');
        exit();
    }

    if($password == $repassword){
        try{
            $stmt = $conn->prepare("SELECT COUNT(*) FROM account WHERE username = :username OR email = :email");
            $stmt->bindValue(':username', $username);
            $stmt->bindValue(':email', $email);

            $stmt->execute();

            $count = $stmt->fetchColumn();

            if ($count > 0) {
                header('Location: ../register.php');
                $_SESSION['register_error'] = 'Tài khoản hoặc mật khẩu đã tồn tại!';
                exit();
            }
        $stmt = $conn->prepare("INSERT INTO account (username, password, name, email) VALUES (:username, :password, :name, :email)");
        $stmt->bindParam(':username', $username);
        $stmt->bindParam(':password', $password);
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':email', $email);
        $stmt->execute();
        header('Location: ../login.php');
        $_SESSION['login_message'] = "Đăng kí thành công!";
        exit();  
        }catch(PDOException $e) {
        session_start();
        $_SESSION['register_error'] = 'Tạo tài khoản thất bại!';
        header('Location: ../register.php');
        exit(); 
        } 
    }
    else{
        session_start();
        $_SESSION['register_error'] = 'Mật khẩu nhập lại không trùng khớp!';
        header('Location: ../register.php');
        exit();  
        }
?>