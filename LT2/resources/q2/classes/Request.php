<!--
    Name: Lim Yin Yao
    Email: yinyao.lim.2020
-->
<?php
   class Request {
    private $id;
    private $airconId;
    private $requestDate;
    private $status;

    function __construct($id, $airconId, $requestDate, $status) {
        $this->id = $id;
        $this->airconId = $airconId;
        $this->requestDate = $requestDate;
        $this->status = $status;
    }

    public function getId() {
        return $this->id;
    }

    public function getAirconId() {
        return $this->airconId;
    }

    public function getRequestDate() {
        return $this->requestDate;
    }

    public function getStatus() {
        return $this->status;
    }

}

?>