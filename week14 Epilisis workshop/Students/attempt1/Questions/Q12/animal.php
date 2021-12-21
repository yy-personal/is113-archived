<?php
#Create your classs file here
class animal {
    private $name;
    private $legs;
    private $noise;

    function __construct($name_info, $legs_info, $noise_info)
    {
        $this->name = $name_info;
        $this->legs = $legs_info;
        $this->noise = $noise_info;
    }

    #Create your own getters/setters
    public function get_name(){
        return $this->name;
    }
    public function get_legs(){
        return $this->legs;
    }
    public function get_noise(){
        return $this->noise;
    }
}
?>


























#Display your result



