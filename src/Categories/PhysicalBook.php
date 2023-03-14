<?php

declare(strict_types=1);

namespace PreemStudio\Basket\Categories;

use PreemStudio\Basket\Contracts\Category;
use PreemStudio\Basket\Product;

final class PhysicalBook implements Category
{
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
