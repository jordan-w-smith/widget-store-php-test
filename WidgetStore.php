<?php

require('./Order.php');

class WidgetStore {
    public $stockCount;

    function __construct ($stockCount) {
        $this->stockCount = $stockCount;
    }

    function getStockCount() {
        return $this->stockCount;
    }

    function processOrder($orderQuantity) {
        $this->stockCount = $this->stockCount - $orderQuantity;
    }
}


?>