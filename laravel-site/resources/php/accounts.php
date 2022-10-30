<?php
class Account{
    private $Name;
    private $AccountType;  /* Testing Information */
    private $Password;
    private $Phone;
    private $Email;
    /* Need HTML form inputs to populate variables */

    function __construct($Name, $AccountType, $Password, $Email, $Phone) {
        $this->Name = $Name;
        $this->AccountType = $AccountType;
        $this->Password = $Password;
        $this->Email = $Email;
        $this->Phone = $Phone;
    }

    function getName() {
 
    }

    function getAccountType() {

    }

    function getPhone() {

    }

    function getEmail() {
        
    }

}