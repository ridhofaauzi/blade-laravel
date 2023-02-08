<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class IncludeTest extends TestCase
{
    public function testInclude()
    {
        $this->view("include", [])
            ->assertSeeText("Programmer Zaman Now")
            ->assertSeeText("selamat datang di website kami")
            ->assertSeeText("selamat datang di web");

        $this->view("include", ["title" => "ridho"])
            ->assertSeeText("ridho")
            ->assertSeeText("selamat datang di website kami")
            ->assertSeeText("selamat datang di web");
    }
}
