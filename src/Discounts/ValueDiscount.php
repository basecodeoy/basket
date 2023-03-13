<?php

declare(strict_types=1);

namespace PreemStudio\Basket\Discounts;

use Money\Money;
use PreemStudio\Basket\Contracts\Discount;
use PreemStudio\Basket\Contracts\Money as MoneyInterface;
use PreemStudio\Basket\Product;

class ValueDiscount implements Discount, MoneyInterface
{
    /**
     * @var Money
     */
    private $rate;

    /**
     * ValueDiscount constructor.
     */
    public function __construct(Money $rate)
    {
        $this->rate = $rate;
    }

    public function product(Product $product): Money
    {
        return $this->rate;
    }

    public function rate(): Money
    {
        return $this->rate;
    }

    public function toMoney(): Money
    {
        return $this->rate;
    }
}
