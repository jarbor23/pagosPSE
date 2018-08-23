<?php
namespace App\Custom;

class PSETransactionMultiCreditRequest 
{
    private $bankCode;
    private $bankInterface;
    private $returnURL;
    private $reference
    private $description;
    private $language;
    private $currency;
    private $totalAmount;
    private $taxAmount;
    private $devolutionBase;
    private $tipAmount;
    private $payer;
    private $buyer;
    private $shipping;
    private $ipAddress;
    private $userAgent;
    private $additionalData;
    private $credits
    
    
    public function setBankCode($bankCode){
        $this->bankCode=$bankCode;
    }
    public function setBankInterface($bankInterface){
        $this->bankInterface=$bankInterface;
    }
    public function setReturnURL($returnURL){
        $this->returnURL=$returnURL;
    }
    public function setReference($reference){
        $this->reference=$reference;
    }
    public function setDescription($description){
        $this->description=$description;
    }
    public function setLanguage($language){
        $this->language=$language;
    }
    public function setCurrency($currency){
        $this->currency=$currency;
    }
    public function setTotalAmount($totalAmount){
        $this->totalAmount=$totalAmount;
    }
    public function setTaxAmount($taxAmount){
        $this->taxAmount=$taxAmount;
    }
    public function setDevolutionBase($devolutionBase){
        $this->devolutionBase=$devolutionBase;
    }
    public function setTipAmount($tipAmount){
        $this->tipAmount=$tipAmount;
    }
    public function setPayer($payer){
        $this->payer=$payer;
    }
    public function setBuyer($buyer){
        $this->buyer=$buyer;
    }
    public function setShipping($shipping){
        $this->shipping=$shipping;
    }
    public function setIpAddress($ipAddress){
        $this->ipAddress=$ipAddress;
    }
    public function setUserAgent($userAgent){
        $this->userAgent=$userAgent;
    }
    public function setdditionalData($additionalData){
        $this->additionalData=$additionalData;
    }
    public function setCredits(){
        return $this->credits;
    }


    public function getBankCode($bankCode){
        $this->bankCode=$bankCode;
    }
    public function getBankInterface($bankInterface){
        $this->bankInterface=$bankInterface;
    }
    public function getReturnURL($returnURL){
        $this->returnURL=$returnURL;
    }
    public function getReference(){
        return $this->reference;
    }
    public function getDescription($description){
        $this->description=$description;
    }
    public function getLanguage($language){
        $this->language=$language;
    }
    public function getCurrency($currency){
        $this->currency=$currency;
    }
    public function getTotalAmount($totalAmount){
        $this->totalAmount=$totalAmount;
    }
    public function getTaxAmount($taxAmount){
        $this->taxAmount=$taxAmount;
    }
    public function getDevolutionBase($devolutionBase){
        $this->devolutionBase=$devolutionBase;
    }
    public function getTipAmount($tipAmount){
        $this->tipAmount=$tipAmount;
    }
    public function getPayer($payer){
        $this->payer=$payer;
    }
    public function getBuyer($buyer){
        $this->buyer=$buyer;
    }
    public function getShipping($shipping){
        $this->shipping=$shipping;
    }
    public function getIpAddress($ipAddress){
        $this->ipAddress=$ipAddress;
    }
    public function getUserAgent($userAgent){
        $this->userAgent=$userAgent;
    }
    public function getAdditionalData($additionalData){
        $this->additionalData=$additionalData;
    }
    public function getCredits($credits){
        $this->credits=$credits;
    }


    
}