<?php
use PHPUnit\Framework\TestCase;

require_once('./Order.php');

class OrderTest extends TestCase {
    public function testHasOrderSize() {
        $order1 = new Order(5);
        $this.assertSame(5, order1.getOrderSize());

    }
}

?>