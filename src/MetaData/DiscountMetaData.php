<?php

declare(strict_types=1);

namespace BaseCodeOy\Basket\MetaData;

use BaseCodeOy\Basket\Basket;
use BaseCodeOy\Basket\Contracts\MetaData;
use BaseCodeOy\Basket\Contracts\Reconciler;
use Money\Money;

final class DiscountMetaData implements MetaData
{
    use Traits\ApplyDiscount;

    /**
     * @var Reconciler
     */
    private $reconciler;

    /**
     * DiscountMetaData constructor.
     */
    public function __construct(Reconciler $reconciler)
    {
        $this->reconciler = $reconciler;
    }

    /**
     * @return Money
     */
    public function generate(Basket $basket)
    {
        $total = new Money(0, $basket->currency());

        foreach ($basket->products() as $product) {
            $total = $total->add($this->reconciler->discount($product));
        }

        if ($discount = $basket->discount) {
            $total = $this->calculateTotalWithDiscount($basket, $discount);
        }

        return $total;
    }

    /**
     * @return string
     */
    public function name()
    {
        return 'discount';
    }
}
