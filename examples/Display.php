<?php

namespace Polymorphism\InterfaceExample;

use Polymorphism\InterfaceExample\PrinterInterface;

class Display
{
    /**
    * @var PrinterInterface
    */
    private $printer;
    public function __construct(PrinterInterface $printer)
    {
        $this->setPrinter($printer);
    }

    public function displayOutput(string $message): string
    {
        $printerOutput = $this->getPrinter()->print($message);
        $displayOutput = "My output is: " . $printerOutput;
        return $displayOutput;
    }

    public function getPrinter(): PrinterInterface
    {
        return $this->printer;
    }

    public function setPrinter(PrinterInterface $printer): void
    {
        $this->printer = $printer;
    }
}
