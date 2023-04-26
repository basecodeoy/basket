<?php

declare(strict_types=1);

namespace BombenProdukt\Basket\Discounts;

use Money\Money;
use BombenProdukt\Basket\Contracts\Discount;
use BombenProdukt\Basket\Contracts\Percentage;
use BombenProdukt\Basket\Percent;
use BombenProdukt\Basket\Product;

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
