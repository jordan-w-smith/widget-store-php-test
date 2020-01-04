<?php
use PHPUnit\Framework\TestCase;

require('../stickee_test/Order.php');

class OrderTest extends TestCase {
    public function testHasOrderUnitCount() {
        $order1 = new Order(5);
        $this->assertSame(5, $order1->getUnitsOrdered());
    }
}
?>