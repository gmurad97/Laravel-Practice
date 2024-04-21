<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

class MathTest extends TestCase
{
    public function testAddition()
    {
        $result = $this->add(2, 3);
        $this->assertEquals(5, $result);
    }

    public function testSubtraction()
    {
        $result = $this->subtract(5, 3);
        $this->assertEquals(2, $result);
    }

    protected function add($a, $b)
    {
        return $a + $b;
    }

    protected function subtract($a, $b)
    {
        return $a - $b;
    }
}
