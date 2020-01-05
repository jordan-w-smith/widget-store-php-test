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

    // function execute() {
    //     if ($POST['quantity']) {
    //         $quantity=$POST['quantity'];
    //         $orderCalculator = new OrderCalculator();
    //         $order = new Order($quantity);
    //         $results = $orderCalculator->processOrder($order);
    //     }
    // }

    function processOrder($order) {
        $unitsLeftToCount = $order->getUnitsOrdered();
        $packsToSend = array();
        while ($unitsLeftToCount > 0) {
            if ($unitsLeftToCount >= 5000) {
                array_push($packsToSend, $this->pack5->packName);
                $unitsLeftToCount -= 5000;
            }
            elseif ($unitsLeftToCount >= 2000) {
                array_push($packsToSend, $this->pack4->packName);
                $unitsLeftToCount -= 2000;
            }
            elseif ($unitsLeftToCount >= 1000) {
                array_push($packsToSend, $this->pack3->packName);
                $unitsLeftToCount -= 1000;
            }
            elseif ($unitsLeftToCount > 250 && $unitsLeftToCount < 501) {
                array_push($packsToSend, $this->pack2->packName);
                $unitsLeftToCount -= 500;
            }
            elseif ($unitsLeftToCount < 250 && $unitsLeftToCount > 0 || $unitsLeftToCount < 1000 && $unitsLeftToCount > 500) {
                array_push($packsToSend, $this->pack1->packName);
                $unitsLeftToCount -= 250;
            }
        }
        $values = array_count_values($packsToSend);
        // print_r($values);
        return $values;
        // print $unitsLeftToCount;
        // print_r($packsToSend);
    }
}
// $orderCalculator = new OrderCalculator();
// $order = new Order(22091);
// print_r($orderCalculator->processOrder($order));

?>