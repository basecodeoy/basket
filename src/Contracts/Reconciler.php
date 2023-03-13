<?php

declare(strict_types=1);

namespace PreemStudio\Basket\Contracts;

use PreemStudio\Basket\Product;

interface Reconciler
{
    /**
     * @return mixed
     */
    public function value(Product $product);

    /**
     * @return mixed
     */
    public function discount(Product $product);

    /**
     * @return mixed
     */
    public function delivery(Product $product);

    /**
     * @return mixed
     */
    public function tax(Product $product);

    /**
     * @return mixed
     */
    public function subtotal(Product $product);

    /**
     * @return mixed
     */
    public function total(Product $product);
}
