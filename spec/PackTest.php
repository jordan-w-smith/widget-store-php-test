<?php

use PHPUnit\Framework\TestCase;
require('../stickee_test/Pack.php');

class PackTest extends TestCase {
    public function testCanGetPackSize() {
        $pack1 = new Pack(250, 'testpack');
        $this->assertSame(250, $pack1->getPackSize());
    }
}
?>