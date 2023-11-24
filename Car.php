<?php

class Car {
    public $brand;
    private $mileage;

    public function __construct($cBrand, $cMileage) {
        $this->brand = $cBrand;
        $this->mileage = $cMileage;
    }

    public function __destruct() {
        echo "<br>" . $this->brand . " is dead at " . $this->mileage . "km";
    }

    public function increaseMileage($amount) {
        $this->mileage += $amount;
    }
}

?>