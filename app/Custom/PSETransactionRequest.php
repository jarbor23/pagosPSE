<?php
namespace App\Custom;

class PSETransactionRequest 
{
    private $bankCode;
    private $bankInterface;
    private $returnURL;
    private $reference;
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
    
    function __construct($bankCode,$bankInterface,$returnURL,$reference,$payer,$buyer,$shipping,$ipAddress,$userAgent,$additionalData){
        $this->bankCode= $bankCode;
        $this->bankInterface= $bankInterface;
        $this->returnURL= $returnURL;
        $this->reference= $reference;
        $this->description= "Descripcion de pago prueba";
        $this->language= "ES";
        $this->currency= "COP";
        $this->totalAmount= 1000;
        $this->taxAmount= 1;
        $this->devolutionBase= 2;
        $this->tipAmount= 1;
        $this->payer= $payer;
        $this->buyer= $buyer;
        $this->shipping= $shipping;
        $this->ipAddress= $ipAddress;
        $this->userAgent= $userAgent;
        $this->additionalData= $additionalData;
    }
    public function setBankCode($bankCode){
        $this->bankCode=$bankCode;
    }
    public function setBankInterface($bankInterface){
        $this->bankInterface=$bankInterface;
    }
    public function setReturnURL($returnURL){
        $this->returnURL=$returnURL;
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


    public function getBankCode($bankCode){
        $this->bankCode=$bankCode;
    }
    public function getBankInterface($bankInterface){
        $this->bankInterface=$bankInterface;
    }
    public function getReturnURL($returnURL){
        $this->returnURL=$returnURL;
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
    public function getdditionalData($additionalData){
        $this->additionalData=$additionalData;
    }


    
}