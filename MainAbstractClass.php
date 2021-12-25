<?php


abstract class MainAbstractClass
{
    protected int $value;
    protected string $description;

    /**
     * MainAbstractClass constructor.
     * @param int $value
     * @param string $description
     */
    public function __construct(int $value, string $description)
    {
        $this->value = $value;
        $this->description = $description;
    }

    public abstract function print(): void;
}