<?php

namespace Tests\Feature;

use App\Models\Person;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class PersonTest extends TestCase
{
    public function testEcho()
    {
        $person = new Person();
        $person->name = "ridho";
        $person->address = "indonesia";

        $this->view("echo", ["person" => $person])
            ->assertSeeText("ridho : indonesia");
    }
}
