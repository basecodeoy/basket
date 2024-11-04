<?php

declare(strict_types=1);

namespace BaseCodeOy\Basket\Discounts;

use BaseCodeOy\Basket\Contracts\Discount;
use BaseCodeOy\Basket\Contracts\Percentage;
use BaseCodeOy\Basket\Percent;
use BaseCodeOy\Basket\Product;
use Money\Money;

final class PercentageDiscount implements Discount, Percentage
{
    private $rate;

    /**
     * PercentageDiscount constructor.
     *
     * @param mixed $rate
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
