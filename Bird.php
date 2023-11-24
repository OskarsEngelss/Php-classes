<?php 

class Bird {
    public $name;
    private $age;

    public function __construct($cName, $cAge) {
        $this->name = $cName;
        $this->age = $cAge;
    }

    public function __destruct() {
        echo "<br>" . $this->name . " dead...";
    }



    public function fly() {
        echo "Fly away to another land " . $this->name;
    }
}

?>