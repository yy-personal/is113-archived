<?php

class Account {

  private $id;            // integer
  private $fullname;      // string
  private $username;      // string
  private $password_hash; // string

  public function __construct($id, $fullname, $username, $password_hash) {
    $this->id = $id;
    $this->fullname = $fullname;
    $this->username = $username;
    $this->password_hash = $password_hash;
  }

  public function getId(){
    return $this->id;
  }

  public function getFullname(){
    return $this->fullname;
  }

  public function getUsername(){
    return $this->username;
  }

  public function getPassword_hash(){
    return $this->password_hash;
  }
}

?>
