<?php
use PHPUnit\Framework\TestCase;

class RegisterTest extends TestCase
{
    public function testRegisterPage()
    {
        require_once "./include/db.php";
        require_once "./api/register.php";
        
        $_POST = array(
            'username' => 'test',
            'password' => 'testpass',
            'confirm_password' => 'testrepassword',
            'email' => 'testuser@example.com'
        );
        
        ob_start();
        include "./api/register.php";
        $output = ob_get_clean();
        $this->assertContains('Đăng ký thành công', $output);
    }
}