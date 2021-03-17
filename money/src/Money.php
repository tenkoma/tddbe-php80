<?php

declare(strict_types=1);

namespace Money;

class Money
{
    protected int $amount;
    protected string $currency;

    public function __construct(int $amount, string $currency)
    {
        $this->amount = $amount;
        $this->currency = $currency;
    }

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
            && $this->currency() === $that->currency();
    }

    public function currency(): string
    {
        return $this->currency;
    }
}
