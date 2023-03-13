<?php

declare(strict_types=1);

namespace PreemStudio\Basket\Discounts;

use Money\Money;
use PreemStudio\Basket\Contracts\Discount;
use PreemStudio\Basket\Contracts\Percentage;
use PreemStudio\Basket\Percent;
use PreemStudio\Basket\Product;

class PercentageDiscount implements Discount, Percentage
{
    private $rate;

    /**
     * PercentageDiscount constructor.
     */
    public function __construct($rate)
    {
        $this->rate = $rate;
    }

    /**
     * @return mixed
     */
    public function product(Product $product): Money
    {
        return $product->price->multiply($this->rate / 100);
    }

    public function rate(): Percent
    {
        return new Percent($this->rate);
    }

    public function toPercent(): Percent
    {
        return new Percent($this->rate);
    }
}
