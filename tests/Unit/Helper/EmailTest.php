<?php

namespace Tests\Unit\Helper;

use App\Helpers\Email;
use PHPUnit\Framework\TestCase;

class EmailTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testEmail()
    {
        $result = Email::validate("gibmyx@gmail.com");
        $this->assertTrue($result);

        $result = Email::validate("gibmyx@@gmail.com");
        $this->assertFalse($result);
    }
}
