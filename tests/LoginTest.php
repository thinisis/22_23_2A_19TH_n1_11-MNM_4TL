<?php
use PHPUnit\Framework\TestCase;

class LoginTest extends TestCase
{
    public function testLoginWithValidCredentials()
    {   
        session_start();
        $_POST['username'] = 'admin';
        $_POST['password'] = 'tho123';

        require_once './api/login.php';

        $this->assertTrue(isset($_SESSION['user_id']));
        $this->assertEquals($_SESSION['username'], 'admin');
        session_destroy();
    }

    public function testLoginWithInvalidCredentials()
    {
        session_start();
        $_POST['username'] = 'invalid_user';
        $_POST['password'] = 'invalid_password';
        require_once './api/login.php';
        $this->assertTrue(isset($_SESSION['login_error']));
        $this->assertEquals($_SESSION['login_error'], 'Tài khoản hoặc mật khẩu không tồn tại!');
        session_destroy();
    }
}

?>