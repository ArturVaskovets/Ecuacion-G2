<?php

namespace model;

use PHPUnit\Framework\TestCase;

class EcuacionGrado2Test extends TestCase
{
    public function testcalc(){
        $equation = new EcuacionGrado2(10,20,30);

        $result = $equation->calc(1);
        $this->assertEquals(60, $result);

        $result = $equation->calc(2);
        $this->assertEquals(110, $result);

        $result = $equation->calc(3);
        $this->assertEquals(180, $result);

        $result = $equation->calc(4);
        $this->assertEquals(270, $result);

        $result = $equation->calc(5);
        $this->assertEquals(380, $result);

        $result = $equation->calc(6);
        $this->assertEquals(510, $result);

        $result = $equation->calc(7);
        $this->assertEquals(660, $result);

        $result = $equation->calc(8);
        $this->assertEquals(830, $result);

        $result = $equation->calc(9);
        $this->assertEquals(1020, $result);

        $result = $equation->calc(10);
        $this->assertEquals(1230, $result);

    }
}
