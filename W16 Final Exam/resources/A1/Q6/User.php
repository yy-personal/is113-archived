<?php

// DO NOT MODIFY THIS FILE

class User {

    private $username;
    private $passwordHash;
    private $employeeType;

    public function __construct($username, $passwordHash, $employeeType) {
        $this->username = $username;
        $this->passwordHash = $passwordHash;
        $this->employeeType = $employeeType;
    }

    public function getUsername() {
        return $this->username;
    }

    public function getPasswordHash() {
        return $this->passwordHash;
    }

    public function getEmployeeType() {
        return $this->employeeType;
    }
}

?>