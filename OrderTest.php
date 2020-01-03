<?php
use PHPUnit\Framework\TestCase;

require('./Order.php');

class OrderTest extends TestCase {
    public function testHasOrderSize() {
        $order1 = new Order(5);
        $this->assertSame(5, $order1->getOrderCount());
    }
}
?>