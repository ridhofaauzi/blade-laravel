<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use PhpParser\Node\Expr\FuncCall;
use Tests\TestCase;

class FormTest extends TestCase
{
    public function testForm()
    {
        $this->view("form", ["user" => [
            "premium" => true,
            "name" => "ridho",
            "admin" => true
        ]])
            ->assertSee("checked")
            ->assertSee("ridho")
            ->assertDontSee("readonly");

        $this->view("form", ["user" => [
            "premium" => false,
            "name" => "ridho",
            "admin" => false
        ]])
            ->assertDontSee("checked")
            ->assertSee("ridho")
            ->assertSee("readonly");
    }
}
