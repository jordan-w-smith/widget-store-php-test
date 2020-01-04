<?php

class Pack {
    public $packSize;

    function __construct ($packName, $packSize) {
        $this->packName = $packName;
        $this->packSize = $packSize;
    }

    function getPackSize() {
        return $this->packSize;
    }
}

?>