<?php


class CompositeClass
{
    private CompClass1 $class_1;
    private CompClass2 $class_2;

    /**
     * CompositeClass constructor.
     * @param CompClass1 $class_1
     * @param CompClass2 $class_2
     */
    public function __construct(CompClass1 $class_1, CompClass2 $class_2)
    {
        $this->class_1 = $class_1;
        $this->class_2 = $class_2;
    }

    /**
     * @return CompClass1
     */
    public function getClass1(): CompClass1
    {
        return $this->class_1;
    }

    /**
     * @return CompClass2
     */
    public function getClass2(): CompClass2
    {
        return $this->class_2;
    }

}