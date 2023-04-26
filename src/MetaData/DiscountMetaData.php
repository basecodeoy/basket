<?php

declare(strict_types=1);

namespace BombenProdukt\Basket\MetaData;

use Money\Money;
use BombenProdukt\Basket\Basket;
use BombenProdukt\Basket\Contracts\MetaData;
use BombenProdukt\Basket\Contracts\Reconciler;

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
