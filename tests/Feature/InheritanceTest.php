<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class InheritanceTest extends TestCase
{
    public function testParent()
    {
        $this->view("child", [])
            ->assertSeeText("Nama aplikasi - Halaman Utama")
            ->assertSeeText("Default Header")
            ->assertSeeText("Deskripsi Header")
            ->assertDontSeeText("Default Content")
            ->assertSeeText("Ini adalah halaman utama");
    }

    public function testInheritanceWithoutOverride()
    {
        $this->view("child-default", [])
            ->assertSeeText("Nama aplikasi - Halaman Utama")
            ->assertSeeText("Default Header")
            ->assertSeeText("Default Content")
            ->assertDontSeeText("Deskripsi Header")
            ->assertDontSeeText("Ini adalah halaman utama");
    }
}
