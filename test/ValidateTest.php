<?php

use PHPUnit\Framework\TestCase; 
use App\Validate;

class ValideteTest extends TestCase {
    public function test_email() {
        $email = Validate::email('kenny@poncio.com');
        $this->assertTrue($email);
    }

    public function test_url() {
        $url = Validate::url('https://platzi.com');
        $this->assertTrue($url);
    }
}