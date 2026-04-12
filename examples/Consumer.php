<?php

namespace Animal;

use Animal\Cavoodle;

class Consumer
{
    public function sayHello(): void
    {
        $dog = new Dog();
        $dog->setSound("Wooof!");
        $dog->makeSound();
    }

    public function sayHelloCavoodle(): void
    {
        $cavoodle = new Cavoodle();
        $cavoodle->setSound("Bark Bark!");
        $cavoodle->makeSound();
    }
}
