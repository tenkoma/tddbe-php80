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
        $product = $five->times(2);
        $this->assertSame(10, $product->amount);
        $product = $product->times(3);
        $this->assertSame(15, $product->amount);
    }
}
