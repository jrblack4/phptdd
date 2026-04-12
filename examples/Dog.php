<?php

namespace Animal;

class Dog
{
    private string $sound;
    private string $color;
    public function __construct()
    {
        $this->setSound("Bark");
        $this->setColor("Black");
    }
    public function makeSound(): string
    {
        $prefix = "Hello ";
        $suffix = "World";
        return $prefix . $this->getSound() . $suffix;
    }
    private function getSound(): string
    {
        return $this->sound;
    }
    public function setSound(string $sound): void
    {
        $this->sound = $sound;
    }
    protected function getColor(): string
    {
        return $this->color;
    }
    protected function setColor(string $color): void
    {
        $this->color = $color;
    }
    public function returnSound(): string
    {
        return $this->getSound();
    }
}
