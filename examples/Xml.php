<?php

namespace Polymorphism\InterfaceExample;

use Polymorphism\InterfaceExample\PrinterInterface;

class Xml implements PrinterInterface
{
    public function print(string $message): string
    {
        return "<message>Hello " . $message . "</message>";
    }
}
