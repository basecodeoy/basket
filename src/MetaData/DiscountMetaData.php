<?php

declare(strict_types=1);

namespace PreemStudio\Basket\MetaData;

use Money\Money;
use PreemStudio\Basket\Basket;
use PreemStudio\Basket\Contracts\MetaData;
use PreemStudio\Basket\Contracts\Reconciler;

class DiscountMetaData implements MetaData
{
    use Traits\ApplyDiscount;

    /**
     * @var Reconciler
     */
    private $reconciler;

    /**
     * DiscountMetaData constructor.
     *
     * @param  Reconciler  $reconciler
     */
    public function __construct(Reconciler $reconciler)
    {
        $this->reconciler = $reconciler;
    }

    /**
     * @param  Basket  $basket
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
