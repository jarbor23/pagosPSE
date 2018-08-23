<?php
namespace App\Custom;

class CreditConcept 
{
    private $entityCode;
    private $serviceCode;
    private $amountValue;
    private $taxValue;
    private $description;
    
    
    public function setEntityCode($entityCode){
        $this->entityCode=$entityCode;
    }

    public function setServiceCode($serviceCode){
        $this->serviceCode=$serviceCode;
    }
    public function setMountValue($amountValue){
        $this->amountValue=$amountValue;
    }
    public function setTaxValue($taxValue){
        $this->taxValue=$taxValue;
    }
    public function setDescription($description){
        $this->description=$description;
    }

    public function getEntityCode(){
        return $this->entityCode;
    }

    public function getServiceCode(){
        return $this->serviceCode;
    }
    public function getMountValue(){
        return $this->amountValue;
    }
    public function getTaxValue(){
        return $this->taxValue;
    }
    public function getDescription(){
        return $this->description;
    }
    
}
