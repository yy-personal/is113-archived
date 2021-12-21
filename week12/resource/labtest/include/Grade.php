<?php

class Grade {

    private $email;
    private $status;
    private $q1;
    private $q2;
    private $q3;
    
    public function __construct($email, $status, $q1, $q2, $q3) {
        $this->email = $email;
        $this->status = $status;
        $this->q1 = $q1;
        $this->q2 = $q2;
        $this->q3 = $q3;
    }

    public function getEmail() {
        return $this->email;
    }

    public function getStatus() {
        return $this->status;
    }

    public function getQ1() {
        return $this->q1;
    }

    public function getQ2() {
        return $this->q2;
    }

    public function getQ3() {
        return $this->q3;
    }
}

?>