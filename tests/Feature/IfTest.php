<?php

namespace Tests\Feature;

use Tests\TestCase;

class IfTest extends TestCase
{
    public function testIf()
    {
        $this->view("if", ["hobbies" => []])
            ->assertSeeText("I don't have hobbies", false);

        $this->view("if", ["hobbies" => ["coding"]])
            ->assertSeeText("I have one hobbies");

        $this->view("if", ["hobbies" => ["coding", "gaming"]])
            ->assertSeeText("I have multiple hobbies");
    }
}
