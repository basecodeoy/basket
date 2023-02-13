<?php

declare(strict_types=1);

namespace PreemStudio\Basket\Categories;

use PreemStudio\Basket\Contracts\Category;
use PreemStudio\Basket\Product;

class PhysicalBook implements Category
{
    /**
     * @param  Product  $product
     */
    public function categorise(Product $product)
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
