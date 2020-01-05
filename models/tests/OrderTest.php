<?php
use PHPUnit\Framework\TestCase;

require('models/Order.php');

class OrderTest extends TestCase {
    public function testHasOrderUnitCount() {
        $order1 = new Order(5);
        $this->assertSame(5, $order1->getUnitsOrdered());
    }
}
?>