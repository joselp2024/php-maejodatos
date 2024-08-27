<?php

use PHPUnit\Framework\TestCase;
use App\Validate;

class ValidateTest extends TestCase{
    public function test_email(){
        $email = Validate::email("i@gmail.com");
        $this->assertTrue($email);

        $email = Validate::email("i@@gmail.com");
        $this->assertFalse($email);
    }

    public function test_url(){
        $url = Validate::url("https://google.com");
        $this->assertTrue($url);

        $url = Validate::url("hsgoogle.com");
        $this->assertFalse($url);
    }
}