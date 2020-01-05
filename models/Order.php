<?php

class Order {

    public $unitsOrdered;

    function __construct ($unitsOrdered) {
        $this->unitsOrdered = $unitsOrdered;
    }

    function getUnitsOrdered() {
        return $this->unitsOrdered;
    }
}

?>