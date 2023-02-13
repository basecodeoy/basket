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
    /**
     * @var
     */
    private $rate;

    /**
     * PercentageDiscount constructor.
     *
     * @param $rate
     */
    public function __construct($rate)
    {
        $this->rate = $rate;
    }

    /**
     * @param  Product  $product
     * @return mixed
     */
    public function product(Product $product): Money
    {
        return $product->price->multiply($this->rate / 100);
    }

    /**
     * @return Percent
     */
    public function rate(): Percent
    {
        return new Percent($this->rate);
    }

    /**
     * @return Percent
     */
    public function toPercent(): Percent
    {
        return new Percent($this->rate);
    }
}
