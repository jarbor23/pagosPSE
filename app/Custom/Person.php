<?php
namespace App\Custom;
class Person 
{
    private $document;
    private $documentType;
    private $firstName;
    private $lastName;
    private $emailAddress;
    private $address;
    private $city;
    private $province;
    private $country;
    private $phone;
    private $mobile;

    function __construct($persona){
        $this->document= $persona["document"];
        $this->documentType   = $persona["documentType"];
        $this->firstName  = $persona["firstName"];
        $this->lastName  = $persona["lastName"];
        $this->emailAddress   = $persona["emailAddress"];
        $this->address  = $persona["address"];
        $this->city   = $persona["city"];
        $this->province  = $persona["province"];
        $this->country   = $persona["country"];
        $this->phone  = $persona["phone"];
        $this->mobile   = $persona["mobile"];
    }

    public function setDocument($doc){
        $this->document=$doc;
    }
    public function setDocumentType($docTip){
        $this->documentType=$docTip;
    }
    public function setLastName($lastN){
        $this->lastName=$lastN;
    }
    public function setEmailAddress($email){
        $this->emailAddress=$email;
    }
    public function setAddress($address){
        $this->address=$address;
    }
    public function setCity($city){
        $this->city=$city;
    }
    public function setProvince($province){
        $this->province=$province;
    }
    public function setCountry($country){
        $this->country=$country;
    }
    public function setPhone($phone){
        $this->phone=$phone;
    }
    public function setMobile($mobile){
        $this->mobile=$mobile;
    }

    //metodos selectores

    public function getDocument(){
        return $this->document;
    }
    public function getDocumentType(){
        return $this->documentType;
    }
    public function getLastName(){
        return $this->lastName;
    }
    public function getEmailAddress(){
        return $this->emailAddress;
    }
    public function getAddress(){
        return $this->address;
    }
    public function getCity(){
        return $this->city;
    }
    public function getProvince(){
        return $this->province;
    }
    public function getCountry(){
        return $this->country;
    }
    public function getPhone(){
        return $this->phone;
    }
    public function getMobile(){
        return $this->mobile;
    }

}