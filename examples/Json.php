<?php

namespace Polymorphism\InterfaceExample;

use Polymorphism\InterfaceExample\PrinterInterface;

class Json implements PrinterInterface
{
    public function print(string $message): string
    {
        return json_encode(['hello' => $message]);
    }
}
