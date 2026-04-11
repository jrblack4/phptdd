<?php

namespace Animal;

use Animal\Dogs\Cavoodle;

class Consumer
{
    public function sayHello()
    {
        $dog = new Dog();
        $dog->setSound("Wooof!");
        $dog->makeSound();
    }
    public function sayHelloCavoodle()
    {
        $cavoodle = new Cavoodle();
        $cavoodle->setSound("bark bark!");
        $cavoodle->makeSound();
    }
}
