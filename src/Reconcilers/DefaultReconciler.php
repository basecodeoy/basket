<?php

declare(strict_types=1);

namespace BombenProdukt\Basket\Reconcilers;

use BombenProdukt\Basket\Contracts\Reconciler;
use BombenProdukt\Basket\Product;
use Money\Money;

final class DefaultReconciler implements Reconciler
{
    /**
     * @return mixed
     */
    public function value(Product $product)
    {
        return $product->price->multiply($product->quantity);
    }

    /**
     * @return Money
     */
    public function discount(Product $product)
    {
        $discountTotal = $this->money($product);

        // "Global" Basket Discount
        foreach ($product->discounts as $discount) {
            $discountTotal = $discountTotal->add(
                $discount->product($product)->multiply($product->quantity),
            );
        }

        // Coupons
        foreach ($product->coupons as $coupon) {
            // Each discount of an coupon
            foreach ($coupon->discounts() as $productDiscount) {
                // Calculate the amount of discount
                $discount = $productDiscount->product($product);
                $discount = $discount->multiply($product->quantity);

                // Add the discount to the discount total
                $discount = new Money($discount->getAmount(), $product->price->getCurrency());
                $discountTotal = $discountTotal->add($discount);
            }
        }

        return $discountTotal;
    }

    /**
     * @return mixed
     */
    public function delivery(Product $product)
    {
        return $product->delivery->multiply($product->quantity);
    }

    /**
     * @return Money
     */
    public function tax(Product $product)
    {
        $tax = $this->money($product);

        if (!$product->taxable || $product->freebie) {
            return $tax;
        }

        $value = $this->value($product);
        $discount = $this->discount($product);

        $value = $value->subtract($discount);

        return $value->multiply($product->rate->float());
    }

    /**
     * @return Money
     */
    public function subtotal(Product $product)
    {
        $subtotal = $this->money($product);

        if (!$product->freebie) {
            $value = $this->value($product);
            $discount = $this->discount($product);
            $subtotal = $subtotal->add($value)->subtract($discount);
        }

        $delivery = $this->delivery($product);

        return $subtotal->add($delivery);
    }

    /**
     * @return mixed
     */
    public function total(Product $product)
    {
        $tax = $this->tax($product);
        $subtotal = $this->subtotal($product);

        return $subtotal->add($tax);
    }

    /**
     * @return Money
     */
    private function money(Product $product)
    {
        return new Money(0, $product->price->getCurrency());
    }
}
