<?php

require('./Order.php');
require('./Pack.php');

class OrderCalculator {
    // public $stockCount;
    function __construct () {
        // $this->stockCount = $stockCount;
        // $this->packs = (object) array(
        //     "pack1" => 250,
        //     "pack2" => 1000,
        //     "pack4" => 2000,
        //     "pack5" => 5000
        // );
    }

    // function getStockCount() {
    //     return $this->stockCount;
    // }

    function testLoop() {
        $i = 0;
        // $unitsLeftToCount = $order->getUnitsOrdered();
        // $packsToSend = array();
        while ($i < 5) {
            $i++;
        }
        return $i;
    }

    function processOrder($order) {
        $unitsLeftToCount = $order->getUnitsOrdered();
        $packsToSend = array();
        while ($unitsLeftToCount > 0) {
            if ($unitsLeftToCount >= 5000) {
                print "pack5: ";
                array_push($packsToSend, "pack5");
                $unitsLeftToCount -= 5000;
            }
            elseif ($unitsLeftToCount >= 2000) {
                print "pack4: ";
                array_push($packsToSend, "pack4");
                $unitsLeftToCount -= 2000;
            }
            elseif ($unitsLeftToCount >= 1000) {
                print "pack3: ";
                array_push($packsToSend, 'pack3');
                $unitsLeftToCount -= 1000;
            }
            elseif ($unitsLeftToCount > 250 && $unitsLeftToCount < 501) {
                print "pack2: ";
                array_push($packsToSend, 'pack2');
                $unitsLeftToCount -= 500;
            }
            elseif ($unitsLeftToCount < 250 && $unitsLeftToCount > 0 || $unitsLeftToCount < 1000 && $unitsLeftToCount > 500) {
                print "pack1: ";
                array_push($packsToSend, 'pack1');
                $unitsLeftToCount -= 250;
            }

        }
        print $unitsLeftToCount;
        print_r($packsToSend);
    }
}
$orderCalculator = new OrderCalculator();
$order = new Order(18029);
print $orderCalculator->processOrder($order);
            // if ($unitsLeftToCount > 5000) {
                // array_push($packsToSend, $this->packs->pack5);
                // $unitsLeftToCount = $unitsLeftToCount - 5000;
            // }
            // elseif ($unitsLeftToCount > 2000) {
                // array_push($packsToSend, $this->packs->pack4);
                // $unitsLeftToCount = $unitsLeftToCount - 2000;
            // }
            // elseif ($unitsLeftToCount > 1000) {
                // array_push($packsToSend, $this->packs->pack3);
                // print "test";
                // $unitsLeftToCount = $unitsLeftToCount - 1000;
            // }
            // elseif ($unitsLeftToCount > 251 && $unitsLeftToCount < 501) {
                // print "test";
                // array_push($packsToSend, $this->packs->pack2);
                // $unitsLeftToCount - 500;
            // }
            // if ($unitsLeftToCount < 500 && $unitsLeftToCount > 0) {
            //     print "test";
            //     $unitsLeftToCount - 250;
                // array_push($packsToSend, $this->packs->pack1);

            // }
            // $unitsLeftToCount -= 250;

            // else {
            //     print "stop";
            // };
        // };
        // return $unitsLeftToCount;
        // return $packsToSend;
        // return 'hey';



?>