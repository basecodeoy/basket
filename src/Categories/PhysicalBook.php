<?php

declare(strict_types=1);

namespace BombenProdukt\Basket\Categories;

use BombenProdukt\Basket\Contracts\Category;
use BombenProdukt\Basket\Product;

final class PhysicalBook implements Category
{
    public function categorise(Product $product): void
    {
        $product->taxable(false);
    }

    /**
     * @return string
     */
    public function name()
    {
        return 'Physical Book';
    }
}
