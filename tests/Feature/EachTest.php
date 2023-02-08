<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class EachTest extends TestCase
{
    public function testEach()
    {
        $this->view("each", ["user" => [
            [
                "name" => "ridho",
                "hobbies" => ["Gaming", "Coding"]
            ],

            [
                "name" => "fauzi",
                "hobbies" => ["Gaming", "Coding"]
            ],
        ]])
            ->assertSeeTextInOrder([".red", "ridho", "Gaming", "Coding", "fauzi", "Gaming", "Coding"]);
    }
}
