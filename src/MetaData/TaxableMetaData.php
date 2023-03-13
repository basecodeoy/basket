<?php

declare(strict_types=1);

namespace PreemStudio\Basket\MetaData;

use PreemStudio\Basket\Basket;
use PreemStudio\Basket\Contracts\MetaData;

class TaxableMetaData implements MetaData
{
    /**
     * @return int
     */
    public function generate(Basket $basket)
    {
        $total = 0;

        foreach ($basket->products() as $product) {
            if ($product->taxable) {
                $total = $total + $product->quantity;
            }
        }

        return $total;
    }

    /**
     * @return string
     */
    public function name()
    {
        return 'taxable';
    }
}
