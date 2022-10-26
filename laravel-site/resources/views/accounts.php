--Work in Progress, I'll change the status when done.--
--INCOMPLETE--
<?php
class Account{
    private $Name = "Sam";
    private $AccountType = "Customer";  /* Testing Information */
    private $Password = "hashThis";
    private $Phone = "07000000000";
    private $Email = "210028353@aston.ac.uk";

    function __construct($Name, $AccountType, $Password, $Email) {
        $this->Name = $Name;
        $this->AccountType = $AccountType;
        $this->Password = $Password;
        $this->Email = $Email;
    }

    /* Need HTML form inputs to populate variables */

}


?>