<?php 
class Manager 
{
    var string $name;
    var string $title;
    //kode constructor overriding
    public function __construct(string $name = "", string $title = "Manager"){
        $this->name = $name;
        $this->title = $title;
    }
    function sayHello(string $name): void
    {
        echo "hi $name, my name is Manager $this->name" . PHP_EOL;
    }
}

class VicePresident extends Manager
{
    //constructor overriding
    public function __construct(string $name = "")
    {
        //tidak wajib,tapi direkomendasikan
        parent:: __construct($name, "VP");
    }
    //functio overriding
    function sayHello(string $name): void
    {
        echo "hi $name, my name is VP $this->name" . PHP_EOL;
    }
}
?>