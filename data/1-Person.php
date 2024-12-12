<?php 
//class
class Person 
{
    //constant di class
    const AUTHOR = "Pemograman Zaman Now";

    var string $name;
    //nullable properties
    var ?string $address = null;
    //default value
    var string $country = "indonesia";

    //constructor
    function __construct(string $name, ?string $address)
    {
        $this->name = $name;
        $this->address = $address;
    }
    //this keyword
    function sayHello(?string $name)
    {
        if (is_null($name)) {
            echo "Hi, my name is $this->name" . PHP_EOL;
        } else {
            echo "Hi $name, my name is $this->name" . PHP_EOL;
        }
    }
    //self keyword
    function info()
    {
        echo "Author : " . self::AUTHOR . PHP_EOL;
    }
    //descructor
    function __destruct()
    {
        echo "Object person $this->name is destroyed" . PHP_EOL;
    }

}
?>