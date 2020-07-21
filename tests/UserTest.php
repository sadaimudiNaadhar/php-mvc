<?php

use PHPUnit\Framework\TestCase;
use App\Models\User;

class UserTest extends TestCase
{   
    private $user;
    
    public function setUp()
    {
        parent::setUp();

        $this->user = new User();
    }

    public function tearDown()
    {
        parent::tearDown();
    }


    /**
     * @test
     *
     * @return void
     */
    public function test_CheckLogin_NotExisting()
    {
        $this->assertFalse($this->user->checkLogin('xerty@gmail.com', 'tsadcom'));
    }

    /**
     * @test
     *
     * @return void
     */
    public function test_registerUser()
    {   
        $id = rand(0, 1000);
        $this->assertTrue($this->user->registerUser('test' . $id . '@gmail.com', 'pass', 'name'));
    }
}