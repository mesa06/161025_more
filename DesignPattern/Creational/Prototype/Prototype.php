<?php

// https://en.wikipedia.org/wiki/Prototype_pattern

// The Prototype pattern in PHP is done with the use of built-in PHP function __clone()

abstract class Prototype
{
    public $a;
    public $b;
    
    public function displayCONS()
    {
        echo "CONS: {$this->a}<br>";
        echo "CONS: {$this->b}<br>";
    }
    
    public function displayCLON()
    {
        echo "CLON: {$this->a}<br>";
        echo "CLON: {$this->b}<br>";
    }

    abstract function __clone();
}

class ConcretePrototype1 extends Prototype
{
    public function __construct()
    {
        $this->a = "A1";
        $this->b = "B1";
        
        $this->displayCONS();
    }

    function __clone()
    {
        $this->displayCLON();
    }
}

class ConcretePrototype2 extends Prototype
{
    public function __construct()
    {
        $this->a = "A2";
        $this->b = "B2";
        
        $this->displayCONS();
    }

    function __clone()
    {
        $this->a = $this->a ."-C";
        $this->b = $this->b ."-C";
        
        $this->displayCLON();
    }
}

$cP1 = new ConcretePrototype1();
$cP2 = new ConcretePrototype2();
$cP2C = clone $cP2;

// RESULT: #quanton81

// CONS: A1
// CONS: B1
// CONS: A2
// CONS: B2
// CLON: A2-C
// CLON: B2-C

?>