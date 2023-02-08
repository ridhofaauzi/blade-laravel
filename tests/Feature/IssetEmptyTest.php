<?php

namespace Tests\Feature;

use Tests\TestCase;

class IssetEmptyTest extends TestCase
{
    public function testIssetAndEmpty()
    {
        $this->view("isset-empty", [])
            ->assertDontSeeText("Hello")
            ->assertSeeText("I don't have any hobbies", false);

        $this->view("isset-empty", ["name" => "ridho"])
            ->assertSeeText("Hello, my name is ridho")
            ->assertSeeText("I don't have any hobbies", false);

        $this->view("isset-empty", ["name" => "ridho", "hobbies" => ["coding"]])
            ->assertSeeText("Hello, my name is ridho")
            ->assertDontSeeText("I don't have any hobbies", false);
    }
}
