<?php

namespace Animal;

class Display
{
    public function outputSound(): void
    {
        $dog1 = new Dog();
        $dog2 = clone $dog1;

        $dog1->setSound("Barky Bark");
        echo $dog2->returnSound();
    }
}
