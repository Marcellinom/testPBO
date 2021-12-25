<?php
require_once 'MainClass.php';
require_once 'Composite/CompositeClass.php';
require_once 'Composite/CompClass1.php';
require_once 'Composite/CompClass2.php';
require_once 'Interface/Class1.php';
require_once 'Interface/Class2.php';

$main1 = new MainClass(
    12,
    "ini main 1",
    new CompositeClass(
        new CompClass1(),
        new CompClass2()
    ),
    new Class1("ini value dari class 1 buat polymorphic case")
);

$main2 = new MainClass(
    42,
    "ini main 2",
    new CompositeClass(
        new CompClass1(),
        new CompClass2()
    ),
    new Class2("ini value dari class 2 buat polymorphic case", 20)
);

$main1->getCompositeClass()->getClass1()->printHello();
$main1->getCompositeClass()->getClass2()->printWorld();

$main1->getInterfaceClass()->printValue();
$main2->getInterfaceClass()->printValue();

if($main2->getInterfaceClass() instanceof Class2)
    // ini polymorphic call
    $main2->getInterfaceClass()->substractAmount(12);
$main2->getInterfaceClass()->printValue();

echo "\nmain 2";
$main2->print();
