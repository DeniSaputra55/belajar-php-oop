<?php 
class Category 
{
    private string $name;
    private bool $expensive;
    //getter
    public function getName(): string 
    {
        return $this->name;
    }

    //validation di setter
    public function setName(string $name) : void 
    {
        if(trim($name) !=""){
            $this->name = $name;
        }
    }

    public function isExpensive(): bool 
    {
        return $this->expensive;
    }

    //setter
    public function setExpensive(bool $expensive) :void 
    {
        $this->expensive = $expensive;
    }
}
?>