<?php

namespace model;

use PHPUnit\Framework\TestCase;

class EcuacionGrado2Test extends TestCase
{
    public function testSayHello()
    {
        $class = new EcuacionGrado2();
        $result = $class->SayHello();
        $this->assertEquals('Hello',$result);
    }
}
