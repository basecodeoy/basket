<?php

declare(strict_types=1);

namespace BaseCodeOy\Basket\MetaData\Traits;

use BaseCodeOy\Basket\Basket;
use BaseCodeOy\Basket\Contracts\Discount;
use BaseCodeOy\Basket\Discounts\PercentageDiscount;
use BaseCodeOy\Basket\Discounts\QuantityDiscount;
use BaseCodeOy\Basket\Discounts\ValueDiscount;
use Money\Money;

trait ApplyDiscount
{
    /**
     * @return Money
     */
    public function calculateTotalDiscount(Basket $basket, Discount $discount, Money $total)
    {
        // Handle a ValueDiscount
        if ($discount instanceof ValueDiscount) {
            $total = $this->subtractValueDiscount($total, $discount);
        }

        // Handle a PercentageDiscount
        if ($discount instanceof PercentageDiscount) {
            $total = $this->subtractPercentageDiscount($total, $discount);
        }

        // Handle a QuantityDiscount
        if ($discount instanceof QuantityDiscount) {
            // Calculate the total quantity of items ordered
            $totalQuantity = 0;

            foreach ($basket->products() as $product) {
                $totalQuantity = $totalQuantity + $product->quantity;
            }

            $quantityDiscount = $discount->rate();

            // Handle a ValueDiscount within a QuantityDiscount
            if ($quantityDiscount instanceof ValueDiscount) {
                $total = $this->subtractValueDiscount($total, $quantityDiscount);
            }

            // Handle a PercentageDiscount within a QuantityDiscount
            if ($quantityDiscount instanceof PercentageDiscount) {
                $total = $this->subtractPercentageDiscount($total, $quantityDiscount);
            }
        }

        return $total;
    }

    /**
     * @param  Basket $discount
     * @return Money
     */
    public function calculateTotalWithDiscount(Basket $basket, Discount $discount)
    {
        // Setup 0 value total
        $total = new Money(0, $basket->currency());

        // Calculate the total of all products
        foreach ($basket->products() as $product) {
            $total = $total->add($this->reconciler->total($product));
        }

        // Handle a ValueDiscount
        if ($discount instanceof ValueDiscount) {
            return $discount->rate();
        }

        // Handle a PercentageDiscount
        if ($discount instanceof PercentageDiscount) {
            return $total->multiply($discount->rate()->int() / 100);
        }

        // Handle a QuantityDiscount
        if ($discount instanceof QuantityDiscount) {
            // Calculate the total quantity of items ordered
            $totalQuantity = 0;

            foreach ($basket->products() as $product) {
                $totalQuantity = $totalQuantity + $product->quantity;
            }

            $quantityDiscount = $discount->rate();

            // Handle a ValueDiscount within a QuantityDiscount
            if ($quantityDiscount instanceof ValueDiscount) {
                return $quantityDiscount;
            }

            // Handle a PercentageDiscount within a QuantityDiscount
            if ($quantityDiscount instanceof PercentageDiscount) {
                return $total->multiply($quantityDiscount->int() / 100);
            }
        }

        return $total;
    }

    protected function subtractValueDiscount(Money $total, Discount $discount): Money
    {
        return $total->subtract($discount->rate());
    }

    protected function subtractPercentageDiscount(Money $total, Discount $discount): Money
    {
        return $total->subtract($total->multiply($discount->rate()->int() / 100));
    }
}
