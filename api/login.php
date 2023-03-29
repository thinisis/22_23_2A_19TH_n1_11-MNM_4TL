<?php
if(isset($_POST['username']) && isset($_POST['password'])) {
    $root_path = $_SERVER['DOCUMENT_ROOT'];
    require_once $root_path."/shop/include/db.php";

    $username = $_POST['username'];
    $password = $_POST['password'];

    $stmt = $conn->prepare("SELECT * FROM account WHERE username = :username AND password = :password");
    $stmt->bindParam(':username', $username);
    $stmt->bindParam(':password', $password);
    $stmt->execute();

    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    if(count($result) > 0) {
        // Login successful
        $user_permission = $result[0]['permission']; 
        $user_id = $result[0]['id'];
        $user_avatar = $result[0]['avatar'];
        $user_email = $result[0]['email'];
        $name = $result[0]['name'];
        $user_coin = $result[0]['coin'];
        require $root_path."/shop/include/session.php";
        create_session($user_id, $username, $name, $user_avatar, $user_coin, $user_permission, $user_email);
        header('Location: ../index.php');
        exit();
    }
    else {
        // Login failed
        session_start();
        $_SESSION['login_error'] = 'Tài khoản hoặc mật khẩu không tồn tại!';
        header('Location: ../login.php');
        exit(); // Make sure to exit after redirecting
    }
}
?>