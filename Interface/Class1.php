<?php


class Class1 implements InterfaceClass
{
    private string $name;

    /**
     * Class1 constructor.
     * @param string $name
     */
    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function printValue(): void
    {
        echo $this->name."\n";
    }
}