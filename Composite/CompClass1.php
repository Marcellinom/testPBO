<?php


class CompClass1
{
    public function printHello(): void
    {
        echo "Hello\n";
    }

    public function getClassName(): string
    {
        return CompClass1::class;
    }
}