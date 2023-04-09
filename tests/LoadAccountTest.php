<?php
require_once "./api/getaccount.php";
require_once "./include/db.php";
use PHPUnit\Framework\TestCase;

class AccountTest extends TestCase
{
    protected $conn;

    protected function setUp(): void
    {
        
    }

    protected function tearDown(): void
    {
        $this->conn = null;
    }

    public function testGetAllAccount()
    {

        $accounts = get_all_account();

        $this->assertIsArray($accounts);
        $this->assertNotEmpty($accounts);

        $this->assertArrayHasKey('id', $accounts[0]);
        $this->assertArrayHasKey('name', $accounts[0]);
        $this->assertArrayHasKey('email', $accounts[0]);

        $this->assertEquals(1, $accounts[0]['id']);
        $this->assertEquals('Thin', $accounts[0]['name']);
        $this->assertEquals('admin@tho.biz', $accounts[0]['email']);
    }
}

?>