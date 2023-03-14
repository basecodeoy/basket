<?php

declare(strict_types=1);

namespace PreemStudio\Basket;

use Closure;
use Money\Currency;
use Money\Money;
use PreemStudio\Basket\Contracts\Discount;
use PreemStudio\Basket\Contracts\Jurisdiction;

final class Basket
{
    private $rate;

    private $currency;

    /**
     * @var Collection
     */
    private $products;

    private $discount;

    private $delivery;

    /**
     * Basket constructor.
     */
    public function __construct(Jurisdiction $jurisdiction)
    {
        $this->rate     = $jurisdiction->rate();
        $this->currency = $jurisdiction->currency();
        $this->products = new Collection;
    }

    /**
     * @return mixed
     */
    public function rate()
    {
        return $this->rate;
    }

    /**
     * @return mixed
     */
    public function currency(): Currency
    {
        return $this->currency;
    }

    /**
     * @return Collection
     */
    public function products()
    {
        return $this->products;
    }

    /**
     * @return int
     */
    public function count()
    {
        return $this->products->count();
    }

    /**
     * @return mixed
     */
    public function pick($sku)
    {
        return $this->products->get($sku);
    }

    public function add(Product $product)
    {
        $this->products->add($product->sku, $product);
    }

    public function update($sku, Closure $action)
    {
        $product = $this->pick($sku);

        $product->action($action);
    }

    public function remove($sku)
    {
        $product = $this->pick($sku);

        $this->products->remove($sku);
    }

    public function flush()
    {
        foreach ($this->products as $product) {
            $this->remove($product->sku);
        }
    }

    public function has($sku)
    {
        return $this->products->containsKey($sku);
    }

    public function discount(Discount $discount)
    {
        $this->discount = $discount;
    }

    public function delivery(Money $delivery)
    {
        $this->delivery = $delivery;
    }

    /**
     * @return bool
     */
    public function isEmpty()
    {
        return $this->products->isEmpty();
    }

    /**
     * @return mixed
     */
    public function __get($key)
    {
        if (property_exists($this, $key)) {
            return $this->$key;
        }
    }
}
