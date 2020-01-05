<?php 

use PHPUnit\Framework\TestCase;

require('../OrderCalculator.php');

class OrderCalculatorTest extends TestCase {
    // public function testHasStockCount() {
    //     $orderCalculator = new OrderCalculator(1000);
    //     $this->assertSame(1000, $widgetStore->getStockCount());
    // }

    // public function testCanProcessBasicOrder() {
    //     $order = new Order(100);
    //     $orderCalculator = new OrderCalculator();
    //     $orderCalculator->processOrder($order);
    //     $this->assertSame(750, $orderCalculator->getStockCount());
    // }

    public function testAddPacksToArray() {
        $order = new Order(500);
        $orderCalculator = new OrderCalculator();
        $this->assertSame(5, $orderCalculator->processOrder($order));

    }

    
}

?>