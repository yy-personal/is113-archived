<?PHP
class person{
    private $name;
    private $dateofbirth;

    public function __construct($name, $dateofbirth)
    {
        $this->name = $name;
        $this->dateofbirth = $dateofbirth;
    }
}

?>