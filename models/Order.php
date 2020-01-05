<?php

class Order {
    public $orderSize;

    function __construct ($unitsOrdered) {
        $this->unitsOrdered = $unitsOrdered;
    }

    function getUnitsOrdered() {
        return $this->unitsOrdered;
    }
}

?>