<?php

namespace Data;

require_once "10-Food.php";
//abstract function
abstract class Animal
{
    public string $name;

    abstract public function run(): void;

    ////contravariance
    abstract public function eat(AnimalFood $animalFood): void;
}

class Cat extends Animal
{
    public function run(): void
    {
        echo "Cat $this->name is running" . PHP_EOL;
    }

    
    public function eat(AnimalFood $animalFood): void
    {
        echo "Cat is eating" . PHP_EOL;
    }
}

class Dog extends Animal
{
    public function run(): void
    {
        echo "Dog $this->name is running" . PHP_EOL;
    }

    public function eat(Food $animalFood): void
    {
        echo "Dog is eating" . PHP_EOL;
    }
}
