<?php


class CompClass2
{
    public function printWorld(): void
    {
        echo "world\n";
    }

    public function getClassName(): string
    {
        return CompClass2::class;
    }
}