<?php

declare(strict_types=1);

namespace BombenProdukt\Basket\MetaData;

use BombenProdukt\Basket\Basket;
use BombenProdukt\Basket\Contracts\MetaData;
use BombenProdukt\Basket\Contracts\Reconciler;
use Money\Money;

final class SubtotalMetaData implements MetaData
{
    /**
     * @var Reconciler
     */
    private $reconciler;

    /**
     * SubtotalMetaData constructor.
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
            $total = $total->add($this->reconciler->subtotal($product));
        }

        return $total;
    }

    /**
     * @return string
     */
    public function name()
    {
        return 'subtotal';
    }
}
