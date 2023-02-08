<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Support\Facades\Blade;


class InlineBladeTemplateTest extends TestCase
{
    public function testInlineBladeTemplate()
    {
        $response = Blade::render('Hello {{$name}}', ['name' => 'ridho']);
        self::assertEquals("Hello ridho", $response);
    }
}
