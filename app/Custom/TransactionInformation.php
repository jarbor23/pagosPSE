<?php
namespace App\Custom;

class PSETransactionResponse 
{
    private $transactionID;
    private $sessionID;
    private $reference;
    private $requestDate
    private $bankProcessDate;
    private $onTest;
    private $trazabilityCode;
    private $returnCode;
    private $trazabilityCode;
    private $transactionCycle;
    private $transactionState;
    private $responseCode;
    private $responseReasonCode;
    private $responseReasonText;
    
    public function setTransactionID($transactionID){
        $this->transactionID=$transactionID;
    }
    public function setSessionID($sessionID){
        $this->sessionID=$sessionID;
    }
    public function setReference($reference){
        $this->reference=$reference;
    }
    public function setRequestDat($requestDat){
        $this->requestDat=$requestDat;
    }
    public function setBankProcessDate($bankProcessDate){
        $this->bankProcessDate=$bankProcessDate;
    }
    public function setOnTest($onTest){
        $this->onTest=$onTest;
    }
    public function setTrazabilityCode($trazabilityCode){
        $this->trazabilityCode=$trazabilityCode;
    }
    public function setReturnCode($returnCode){
        $this->returnCode=$returnCode;
    }
    public function setTrazabilityCode($trazabilityCode){
        $this->trazabilityCode=$trazabilityCode;
    }
    public function setTransactionCycle($transactionCycle){
        $this->transactionCycle=$transactionCycle;
    }
    public function setTransactionState($transactionState){
        $this->transactionState=$transactionState;
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
    public function getReference(){
        return $this->reference;
    }
    public function getRequestDat(){
        return $this->requestDat;
    }
    public function getBankProcessDate(){
        return $this->bankProcessDate;
    }
    public function getOnTest(){
        return $this->onTest;
    }
    public function getTrazabilityCode(){
        return $this->trazabilityCode;
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
    public function getTransactionState(){
        return $this->transactionState;
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