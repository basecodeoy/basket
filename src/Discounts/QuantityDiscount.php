<?php

declare(strict_types=1);

namespace BombenProdukt\Basket\Discounts;

use Money\Money;
use BombenProdukt\Basket\Contracts\Discount;
use BombenProdukt\Basket\Product;

final class QuantityDiscount implements Discount
{
    private $quantity;

    /**
     * @var Discount
     */
    private $rate;

    /**
     * QuantityDiscount constructor.
     *
     * @param mixed $quantity
     */
    public function __construct($quantity, Discount $rate)
    {
        $this->quantity = $quantity;
        $this->rate = $rate;
    }

    public function product(Product $product): Money
    {
        if ($product->quantity >= $this->quantity) {
            return $this->rate->product($product);
        }

        return new Money(0, $product->price->getCurrency());
    }

    public function rate(): Discount
    {
        return $this->rate;
    }
}
