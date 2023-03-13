<?php

declare(strict_types=1);

namespace PreemStudio\Basket\MetaData;

use Money\Money;
use PreemStudio\Basket\Basket;
use PreemStudio\Basket\Contracts\MetaData;
use PreemStudio\Basket\Contracts\Reconciler;

class ValueMetaData implements MetaData
{
    use Traits\ApplyDiscount;

    /**
     * @var Reconciler
     */
    private $reconciler;

    /**
     * ValueMetaData constructor.
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
            $total = $total->add($this->reconciler->value($product));
        }

        if ($discount = $basket->discount) {
            $total = $this->calculateTotalDiscount($basket, $discount, $total);
        }

        if ($basket->delivery instanceof Money) {
            $total = $total->add($basket->delivery);
        }

        return $total;
    }

    /**
     * @return string
     */
    public function name()
    {
        return 'value';
    }
}
