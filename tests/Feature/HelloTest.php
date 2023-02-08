<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class HelloTest extends TestCase
{
    public function testHello()
    {
        $this->get("/hello")->assertSeeText("ridho");
    }

    public function testHelloWorld()
    {
        $this->get("/world")->assertSeeText("ridho");
    }

    public function testHelloView()
    {
        $this->view("/hello", ["name" => "ridho"])->assertSeeText("ridho");
    }

    public function testHelloWorldView()
    {
        $this->view("/hello/world", ["name" => "ridho"])->assertSeeText("ridho");
    }
}
