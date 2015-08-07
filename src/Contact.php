<?php
class Contact {
    private $name;
    private $phoneNumber;
    private $address;

//start constructor

    function __construct($name, $phoneNumber, $address) {
        $this->name = $name;
        $this->phoneNumber = $phoneNumber;
        $this->address = $address;
    }

//end constructor
//start setters and getters

    function setName ($contactName) {
        $this->name  = $contactName;
    }

    function getName () {
        return $this->name;
    }

    function setPhoneNumber ($contactPhone) {
        $this->phoneNumber  = $contactPhone;
    }

    function getPhoneNumber () {
        return $this->phoneNumber;
    }

    function setAddress ($contactAddress) {
        $this->address  = $contactAddress;
    }

    function getAddress () {
        return $this->address;
    }

//end setters and getters
//start save, getAll, and delete methods

    function save() {
        array_push($_SESSION['contact_list'], $this);
    }

    static function getAll() {
        return $_SESSION['contact_list'];
    }

    static function deleteAll() {
        $_SESSION['contact_list'] = array();
    }

//end save, getAll, and delete methods

}
?>
