<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ServiceInjectionTest extends TestCase
{
    public function testInjectionService()
    {
        $this->view("service-injection", ["name" => "ridho"])
            ->assertSeeText("hello ridho");
    }
}
