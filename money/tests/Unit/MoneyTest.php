<?php

declare(strict_types=1);

namespace Money\Tests\Unit;

use Money\Tests\TestCase;
use Money\Dollar;

class MoneyTest extends TestCase
{
    public function testMultiplication()
    {
        $five = new Dollar(5);
        $five->times(2);
        $this->assertSame(10, $five->amount);
        $five->times(3);
        $this->assertSame(15, $five->amount);
    }
}
