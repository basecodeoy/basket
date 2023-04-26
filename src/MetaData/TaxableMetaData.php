<?php

declare(strict_types=1);

namespace BombenProdukt\Basket\MetaData;

use BombenProdukt\Basket\Basket;
use BombenProdukt\Basket\Contracts\MetaData;

final class TaxableMetaData implements MetaData
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
