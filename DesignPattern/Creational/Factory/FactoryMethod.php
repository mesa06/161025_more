<?php

// https://en.wikipedia.org/wiki/Factory_method_pattern

/* Factory and car interfaces */

interface CarFactory 
{
    public function makeCar();
}

interface Car 
{
    public function getType();
}

/* Concrete implementations of the factory and car */

class SedanFactory implements CarFactory 
{
    public function makeCar() 
    {
        return new Sedan();
    }
}

class Sedan implements Car 
{
    public function getType() 
    {
        return 'Sedan';
    }
}

/* Client */

$factory = new SedanFactory();
$car = $factory->makeCar();
print $car->getType();

?>
