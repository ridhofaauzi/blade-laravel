<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ExtendingBladeTest extends TestCase
{
    public function testExtendingBlade()
    {
        $this->view("extending", ["name" => "ridho"])
            ->assertSeeText("Hello ridho");
    }
}
