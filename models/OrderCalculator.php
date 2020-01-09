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
    
    // function sortPacks($packs) {
    //     foreach ($packs as $pack) {
    //         $lastPack = $pack;
    //         if ($pack->packSize < $lastPack->packSize) {
    //             array_push($this->sortedPacks, $pack);
    //         }
    //     }
    //     return $this->sortedPacks;
    // }

        // function criteria($a, $b) {
        //     return $a->packSize - $b->packSize;
        //     if($a->packSize > $b->packSize) {
        //         return $a;
        //     }
        //     else {
        //         return $b;
        //     }
        // }
        // usort($this->sortedPacks, "criteria");

        // foreach ($packs as $pack) {

        //     array_push($sortedPacks, $pack);
        // }
        // }

    function processOrder($order) {
        // $sortedPacks = array();
        $unitsLeftToCount = $order->getUnitsOrdered();
        $packsToSend = array();
        print_r($this->packs);
        arsort($this->packs);
        $sortedPacks = $this->packs;
        print_r($this->packs);
        print '    break line     ';
        print_r($sortedPacks[0]->packSize);

        $array = array_values($sortedPacks);
        // print_r('sorted packs' . $sortedPacks);
            foreach ($this->packs as $pack) {
                while($unitsLeftToCount > 0) {
                    if ($unitsLeftToCount <= $sortedPacks[0]->packSize && $pack->packSize === $sortedPacks[0]->packSize){
                        // print 'less than 250';
                        array_push($packsToSend, $pack->packName);
                        $unitsLeftToCount -= $pack->packSize;
                        // print 'units left to count' . $unitsLeftToCount;
                    // break;
                    }
                    // elseif($unitsLeftToCount > $sortedPacks[0]->packSize && $unitsLeftToCount > $pack->packSize - $sortedPacks[0]->packSize {

                        elseif($unitsLeftToCount > $pack->packSize - $sortedPacks[0]->packSize) {
                        // print " if";
                        // print $pack->packSize;
                        array_push($packsToSend, $pack->packName);
                        $unitsLeftToCount -= $pack->packSize;
                    // break;
                    }
                    else {
                    break;
                    }
                // break;
                }
            // break;
            }
        // break;
        // }

        $values = array_count_values($packsToSend);
        return $values;
    }



    // function processOrder($order) {
    //     $unitsLeftToCount = $order->getUnitsOrdered();
    //     $packsToSend = array();
    //     while ($unitsLeftToCount > 0) {
    //         if ($unitsLeftToCount > ($this->pack5->packSize - 250)) {
    //             array_push($packsToSend, $this->pack5->packName);
    //             $unitsLeftToCount -= $this->pack5->packSize;
    //         }
    //         elseif ($unitsLeftToCount > ($this->pack4->packSize - 250)) {
    //             array_push($packsToSend, $this->pack4->packName);
    //             $unitsLeftToCount -= 2000;
    //         }
    //         elseif ($unitsLeftToCount > 750) {
    //             array_push($packsToSend, $this->pack3->packName);
    //             $unitsLeftToCount -= 1000;
    //         }
    //         elseif ($unitsLeftToCount > 250 && $unitsLeftToCount < 501) {
    //             array_push($packsToSend, $this->pack2->packName);
    //             $unitsLeftToCount -= 500;
    //         }
    //         elseif ($unitsLeftToCount < 250 && $unitsLeftToCount > 0 || $unitsLeftToCount < 751 && $unitsLeftToCount > 500) {
    //             array_push($packsToSend, $this->pack1->packName);
    //             $unitsLeftToCount -= 250;
    //         }
    //     }
    //     $values = array_count_values($packsToSend);
    //     return $values;
    // }
}

// $orderCalculatorInstance = new OrderCalculator();
// $orderTest = new Order('500');
// print_r($orderCalculatorInstance->processOrder($orderTest));
// print_r($orderCalculatorInstance->sortPacks($orderCalculatorInstance->packs));

?>