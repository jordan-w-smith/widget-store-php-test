<?php

class Pack {
    public $packSize;

    function __construct ($packSize) {
        $this->packSize = $packSize;
    }

    function getPackSize() {
        return $this->packSize;
    }
}

?>