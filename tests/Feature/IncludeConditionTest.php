<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class IncludeConditionTest extends TestCase
{
    public function testIncludeCondition()
    {
        $this->view("include-condition", [
            "user" => [
                "name" => "Ridho",
                "owner" => true,
            ],
        ])
            ->assertSeeText("selamat datang owner")
            ->assertSeeText("selamat datang Ridho");

        $this->view("include-condition", [
            "user" => [
                "name" => "Ridho",
                "owner" => false,
            ],
        ])
            ->assertDontSeeText("selamat datang owner")
            ->assertSeeText("selamat datang Ridho");
    }
}
