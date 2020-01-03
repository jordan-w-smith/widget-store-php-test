<?php 

use PHPUnit\Framework\TestCase;

require('../stickee_test/WidgetStore.php');

class WidgetStoreTest extends TestCase {
    public function testHasStockCount() {
        $widgetStore = new WidgetStore(1000);
        $this->assertSame(1000, $widgetStore->getStockCount());
    }

    public function testCanProcessSale() {
        $widgetStore = new WidgetStore(1000);
        $widgetStore->processOrder(250);
        $this->assertSame(750, $widgetStore->getStockCount());
    }
}

?>