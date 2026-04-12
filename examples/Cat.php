<?php

namespace Animals\Polymorphism\AbstractExample;

class Cat extends AbstractAnimal
{
    public function makeSound(): string
    {
        return "meow!";
    }
}
