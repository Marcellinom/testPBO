<?php


class Class2 implements InterfaceClass
{
    private string $name;
    private string $amount;

    /**
     * Class2 constructor.
     * @param string $name
     * @param string $amount
     */
    public function __construct(string $name, string $amount)
    {
        $this->name = $name;
        $this->amount = $amount;
    }

    public function printValue(): void
    {
        echo "{$this->name} has {$this->amount} values\n";
    }

    public function substractAmount(int $amount): void
    {
        $this->amount -= $amount;
    }
}