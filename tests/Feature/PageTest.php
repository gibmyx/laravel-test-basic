<?php

declare(strict_types=1);

namespace Tests\Feature;

use Tests\TestCase;

final class PageTest extends TestCase
{

    public function testHome()
    {
        $response = $this->get('/');
        $response->assertStatus(200);
    }

    public function testAbout()
    {
        $response = $this->get('about');
        $response->assertStatus(200);
    }

}
