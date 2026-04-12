<?php

namespace Animals\Polymorphism\AbstractExample;

class Cow extends AbstractAnimal
{
    public function makeSound(): string
    {
        return "mooo!";
    }
}
