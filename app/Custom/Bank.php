<?php
namespace App\Custom;

class Bank 
{
    private $bankCode;
    private $bankName;
    
    
    public function setBankCode($bankCode){
        $this->bankCode=$bankCode;
    }
    public function setBankName($bankName){
        $this->bankName=$bankName;
    }

    public function getBankCode(){
        return $this->bankCode;
    }
    public function getBankName(){
        return $this->bankName;
    }
    
}
