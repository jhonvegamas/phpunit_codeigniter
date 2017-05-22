<?php
require_once('application/libraries/User.php');

class UserTest extends PHPUnit_Framework_TestCase
{
    

    function test_it_should_construct()
    {
        $user = new User();
        $this->assertInstanceOf(User::class, $user);
    }

    function test_it_should_have_a_name_user()
    {
        $user = new User();
        $user->registUser('root', '123');
        $name = $user->getEmail();
        $this->assertEquals('root', $name);
    }

    function test_it_should_have_a_password_user()
    {
        $user = new User();
        $user->registUser('root', '123');
        $pass = $user->getPassword();
        $this->assertEquals('123', $pass);
    }

}
