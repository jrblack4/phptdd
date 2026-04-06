<?php

namespace Animal;

class Display
{
    public function outputSound(): void
    {
        $dog = new Dog();
        echo $dog->returnSound();
    }
}
