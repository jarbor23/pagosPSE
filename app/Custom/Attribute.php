<?php
namespace App\Custom;
class Attribute 
{
    private $name;
    private $value;
    /*function __construct() {
        $this->$name="";
        $this->value="";
    }*/
    public function setName($nombre){
        $this->name=$nombre;
    }
    public function setValue($valor){
        $this->value=$valor;
    }
    public function getName(){
        return $this->name;
    }
    public function getValue(){
        return $this->value;
    }

}