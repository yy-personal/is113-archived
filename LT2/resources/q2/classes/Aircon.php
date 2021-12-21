<!--
    Name: Lim Yin Yao
    Email: yinyao.lim.2020
-->
<?php
   class Aircon {
    private $id;
    private $username;
    private $name;
    private $location;
    private $lastRqDate;
    private $lastRqStatus;

    public function __construct($id, $username, $name, $location, $lastRqDate, $lastRqStatus) {
        $this->id = $id;
        $this->username = $username;
        $this->name = $name;
        $this->location = $location;
        $this->lastRqDate = $lastRqDate;
        $this->lastRqStatus = $lastRqStatus;
    }

    public function getId() {
        return $this->id;
    }

    public function getUsername() {
        return $this->username;
    }

    public function getName() {
        return $this->name;
    }

    public function getLocation() {
        return $this->location;
    }

    public function getLastRqDate() {
        return $this->lastRqDate;
    }

    public function getLastRqStatus() {
        return $this->lastRqStatus;
    }

}

?>