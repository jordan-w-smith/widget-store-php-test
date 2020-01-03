<?php 

use PHPUnit\Framework\TestCase;

require('../stickee_test/WidgetStore.php');

class WidgetStoreTest extends TestCase {
    public function testHasStockCount() {
        $widgetStore = new WidgetStore(1000);
        $this->assertSame(1000, $widgetStore->getStockCount());
    }
}

?>