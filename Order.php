<?php

class Order {
    public $orderSize;

    function __construct ($orderSize) {
        $this->orderSize = $orderSize;
    }

    function getOrderCount() {
        return $this->orderSize;
    }
}

?>