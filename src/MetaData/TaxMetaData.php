<?php

declare(strict_types=1);

namespace PreemStudio\Basket\MetaData;

use Money\Money;
use PreemStudio\Basket\Basket;
use PreemStudio\Basket\Contracts\MetaData;
use PreemStudio\Basket\Contracts\Reconciler;

class TaxMetaData implements MetaData
{
    /**
     * @var Reconciler
     */
    private $reconciler;

    /**
     * TaxMetaData constructor.
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
            $total = $total->add($this->reconciler->tax($product));
        }

        return $total;
    }

    /**
     * @return string
     */
    public function name()
    {
        return 'tax';
    }
}
