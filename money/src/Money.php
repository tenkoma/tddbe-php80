<?php

declare(strict_types=1);

namespace Money;

abstract class Money
{
    protected int $amount;

    abstract public function times(int $multiplier): self;

    public static function dollar(int $amount): Money
    {
        return new Dollar($amount);
    }

    public static function franc(int $amount): Money
    {
        return new Franc($amount);
    }

    public function equals(self $that): bool
    {
        return $this->amount === $that->amount
            && $this::class === $that::class;
    }
}
