<?php

class WidgetStore {
    public $stockCount;

    function __construct ($stockCount) {
        $this->stockCount = $stockCount;
    }

    function getStockCount() {
        return $this->stockCount;
    }
}


?>