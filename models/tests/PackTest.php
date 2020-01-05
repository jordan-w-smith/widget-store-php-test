<?php

use PHPUnit\Framework\TestCase;
require('../Pack.php');

class PackTest extends TestCase {
    
    public function testCanGetPackSize() {
        $pack1 = new Pack(250, 'testpack');
        $this->assertSame(250, $pack1->getPackSize());
    }

    public function testCanGetPackName() {
        $pack1 = new Pack(250, 'testpack');
        $this->assertSame('testpack', $pack1->getPackName());
    }
}
?>