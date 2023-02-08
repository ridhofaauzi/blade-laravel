<?php 

namespace App\Services;

class SayHello{
    function SayHello(string $name):string
    {
        return "hello $name";
    }
}
