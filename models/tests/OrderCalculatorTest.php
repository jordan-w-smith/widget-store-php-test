<?php 

use PHPUnit\Framework\TestCase;

require('models/OrderCalculator.php');

class OrderCalculatorTest extends TestCase {
    
    public function testAddPacksToArray() {
        $order = new Order(500);
        $orderCalculator = new OrderCalculator();
        $this->assertSame(5, $orderCalculator->processOrder($order));
    }

    
}

?>