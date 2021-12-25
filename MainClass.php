<?php

require_once 'MainAbstractClass.php';
require_once 'Composite/CompositeClass.php';
require_once 'Interface/InterfaceClass.php';

class MainClass extends MainAbstractClass
{
    private CompositeClass $composite_class;
    private InterfaceClass $interface_class;

    /**
     * MainClass constructor.
     * @param int $val
     * @param string $description
     * @param CompositeClass $composite_class
     * @param InterfaceClass $interface_class
     */
    public function __construct(int $val, string $description, CompositeClass $composite_class, InterfaceClass $interface_class)
    {
        parent::__construct($val, $description);
        $this->composite_class = $composite_class;
        $this->interface_class = $interface_class;
    }

    public function print(): void
    {
        echo "\ncomposite class:\n";
        echo $this->composite_class->getClass1()->getClassName()."\n";
        echo $this->composite_class->getClass2()->getClassName()."\n";

        echo "\ninterface class:\n";
        $this->interface_class->printValue()."\n";

        echo "\ninherited properties:\n";
        echo "value: {$this->value} & description: {$this->description}\n";
    }

    /**
     * @return CompositeClass
     */
    public function getCompositeClass(): CompositeClass
    {
        return $this->composite_class;
    }

    /**
     * @return InterfaceClass
     */
    public function getInterfaceClass(): InterfaceClass
    {
        return $this->interface_class;
    }
}