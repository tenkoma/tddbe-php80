<?php

declare(strict_types=1);

namespace Money;

abstract class Money
{
    protected int $amount;
    protected string $currency;

    abstract public function times(int $multiplier): self;

    public static function dollar(int $amount): Money
    {
        return new Dollar($amount, "USD");
    }

    public static function franc(int $amount): Money
    {
        return new Franc($amount, "CHF");
    }

    public function equals(self $that): bool
    {
        return $this->amount === $that->amount
            && $this::class === $that::class;
    }

    public function currency(): string
    {
        return $this->currency;
    }
}
