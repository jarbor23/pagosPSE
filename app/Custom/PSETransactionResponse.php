<?php
namespace App\Custom;

class PSETransactionResponse 
{
    private $transactionID;
    private $sessionID;
    private $returnCode;
    private $trazabilityCode
    private $transactionCycle;
    private $bankCurrency;
    private $bankFactor;
    private $bankURL;
    private $responseCode;
    private $responseReasonCode;
    private $responseReasonText;
    
    
    public function setTransactionID($transactionID){
        $this->transactionID=$transactionID;
    }
    public function setSessionID($sessionID){
        $this->sessionID=$sessionID;
    }
    public function setReturnCode($returnCode){
        $this->returnCode=$returnCode;
    }
    public function setTrazabilityCode($trazabilityCod){
        $this->trazabilityCode=$trazabilityCod;
    }
    public function setTransactionCycle($transactionCycle){
        $this->transactionCycle=$transactionCycle;
    }
    public function setBankCurrency($bankCurrency){
        $this->bankCurrency=$bankCurrency;
    }
    public function setBankFactor($bankFactor){
        $this->bankFactor=$bankFactor;
    }
    public function setBankURL($bankURL){
        $this->bankURL=$bankURL;
    }
    public function setResponseCode($responseCode){
        $this->responseCode=$responseCode;
    }
    public function setResponseReasonCode($responseReasonCode){
        $this->responseReasonCode=$responseReasonCode;
    }
    public function setResponseReasonText($responseReasonText){
        $this->responseReasonText=$responseReasonText;
    }
    

    public function getTransactionID(){
        return $this->transactionID;
    }
    public function getSessionID(){
        return $this->sessionID;
    }
    public function getReturnCode(){
        return $this->returnCode;
    }
    public function getTrazabilityCode(){
        return $this->trazabilityCode;
    }
    public function getTransactionCycle(){
        return $this->transactionCycle;
    }
    public function getBankCurrency(){
        return $this->bankCurrency;
    }
    public function getBankFactor(){
        return $this->bankFactor;
    }
    public function getBankURL(){
        return $this->bankURL;
    }
    public function getResponseCode(){
        return $this->responseCode;
    }
    public function getResponseReasonCode(){
        return $this->responseReasonCode;
    }
    public function getResponseReasonText(){
        return $this->responseReasonText;
    }


    
}