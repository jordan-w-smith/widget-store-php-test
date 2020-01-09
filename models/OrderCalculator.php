<?php

require('./models/Order.php');
require('./models/Pack.php');

class OrderCalculator {
    function __construct () {
        $this->packs = array(
            new Pack('pack1 - 250pc', 250),
            new Pack('pack2 - 500pc', 500),
            new Pack('pack3 - 1000pc', 1000),
            new Pack('pack4 - 2000pc', 2000),
            new Pack('pack5 - 5000pc', 5000)
        );
        $this->sortedPacks = array();
    }

    function processOrder($order) {
        $unitsLeftToCount = $order->getUnitsOrdered();
        $packsToSend = array();
        arsort($this->packs);
        $sortedPacks = $this->packs;
        $smallestPack = $sortedPacks[0]->packSize;
            foreach ($sortedPacks as $pack) {
                while($unitsLeftToCount > 0) {
                    if ($unitsLeftToCount <= $smallestPack && $pack->packSize === $smallestPack){
                        array_push($packsToSend, $pack->packName);
                        $unitsLeftToCount -= $pack->packSize;
                    }
                    elseif ($unitsLeftToCount > $pack->packSize - $smallestPack) {
                        array_push($packsToSend, $pack->packName);
                        $unitsLeftToCount -= $pack->packSize;
                    }
                    else {
                        break;
                    }
                }
            }
        $values = array_count_values($packsToSend);
        return $values;
    }
}
?>