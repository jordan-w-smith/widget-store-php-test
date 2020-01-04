<?php

require('./Order.php');
require('./Pack.php');

class OrderCalculator {
    function __construct () {
        $this->pack1 = new Pack('pack1', 250);
        $this->pack2 = new Pack('pack2', 500);
        $this->pack3 = new Pack('pack3', 1000);
        $this->pack4 = new Pack('pack4', 2000);
        $this->pack5 = new Pack('pack5', 5000);
    }

    function processOrder($order) {
        $unitsLeftToCount = $order->getUnitsOrdered();
        $packsToSend = array();
        while ($unitsLeftToCount > 0) {
            if ($unitsLeftToCount >= 5000) {
                print "pack5: ";
                array_push($packsToSend, $this->pack5);
                $unitsLeftToCount -= 5000;
            }
            elseif ($unitsLeftToCount >= 2000) {
                print "pack4: ";
                array_push($packsToSend, $this->pack4);
                $unitsLeftToCount -= 2000;
            }
            elseif ($unitsLeftToCount >= 1000) {
                print "pack3: ";
                array_push($packsToSend, $this->pack3);
                $unitsLeftToCount -= 1000;
            }
            elseif ($unitsLeftToCount > 250 && $unitsLeftToCount < 501) {
                print "pack2: ";
                array_push($packsToSend, $this->pack2);
                $unitsLeftToCount -= 500;
            }
            elseif ($unitsLeftToCount < 250 && $unitsLeftToCount > 0 || $unitsLeftToCount < 1000 && $unitsLeftToCount > 500) {
                print "pack1: ";
                array_push($packsToSend, $this->pack1);
                $unitsLeftToCount -= 250;
            }

        }
        print $unitsLeftToCount;
        print_r($packsToSend);
    }
}
$orderCalculator = new OrderCalculator();
$order = new Order(251);
print $orderCalculator->processOrder($order);

?>