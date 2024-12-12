<?php
class Programmer
{
    public string $name;
    public function __construct(string $name)
    {
        $this->name = $name;
    }
}
class BackendProgrammer extends Programmer
{
}
class FrontendProgrammer extends Programmer
{
}
//polymorphsim
class Company
{
    public Programmer $programmer;
}
//function argument polymorphism
function sayHelloProgrammer(Programmer $programmer)
{
    //type check & cast
    if ($programmer instanceof BackendProgrammer) {
        echo "Hello Backend Programmer $programmer->name" . PHP_EOL;
    } else if ($programmer instanceof FrontendProgrammer) {
        echo "Hello Frontend Programmer $programmer->name" . PHP_EOL;
    } else if ($programmer instanceof Programmer) {
        echo "Hello Programmer $programmer->name" . PHP_EOL;
    }
}
