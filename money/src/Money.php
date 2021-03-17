<?php

declare(strict_types=1);

namespace Money;

class Money
{
    protected int $amount;

    public static function dollar(int $amount): Dollar
    {
        return new Dollar($amount);

    }

    public function equals(self $that): bool
    {
        return $this->amount === $that->amount
            && $this::class === $that::class;
    }
}
