<?php

declare(strict_types=1);

namespace BaseCodeOy\Basket\Discounts;

use BaseCodeOy\Basket\Contracts\Discount;
use BaseCodeOy\Basket\Contracts\Money as MoneyInterface;
use BaseCodeOy\Basket\Product;
use Money\Money;

final class ValueDiscount implements Discount, MoneyInterface
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
