<?php
namespace App\Custom;
use App\Custom\Attribute;

class Authentication 
{
    private $login;
    private $tranKey;
    private $seed;
    private $additional;
    
    function __construct() {
        $login="6dd490faf9cb87a9862245da41170ff2";
        $key="024h1IlD";
        $seed = date('c');
        $additional=new Attribute();
        $tranKey = sha1($seed.$key, false);
        $this->login=$login;
        $this->seed=$seed;
        $this->tranKey=$tranKey;
        $this->additional=$additional;
    }
    public function setLogin($log){
        $this->login=$log;
    }
    public function setTranKey($key){
        $this->tranKey=$key;
    }
    //solo usamos metodos modificadores porque estos datos deben ser privados, no necesitan un retorno
}
