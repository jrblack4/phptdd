<?php

abstract class AbstractPrinter
{
    abstract protected function print(string $message): bool;
}

class ConsolePrinter extends AbstractPrinter
{
    protected function print(string $message): bool
    {
        // TODO: implement print();
        return true;
    }
}

class PdfPrinter extends AbstractPrinter
{
    protected function print(string $message): bool
    {
        // TODO: implement print();
        return true;
    }
}
