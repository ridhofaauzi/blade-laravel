<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ErrorTest extends TestCase
{
    public function testValidationErrors()
    {
        $errors = [
            "name" => "name is required",
            "password" => "password is required",
        ];

        $this->withViewErrors($errors)
            ->view("error", [])
            ->assertSeeText("name is required")
            ->assertSeeText("password is required");
    }
}
