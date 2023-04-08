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
        $this->rate = $jurisdiction->rate();
        $this->currency = $jurisdiction->currency();
        $this->products = new Collection();
    }

    /**
     * @param  mixed $key
     * @return mixed
     */
    public function __get($key)
    {
        if (\property_exists($this, $key)) {
            return $this->{$key};
        }
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
     * @param  mixed $sku
     * @return mixed
     */
    public function pick($sku)
    {
        return $this->products->get($sku);
    }

    public function add(Product $product): void
    {
        $this->products->add($product->sku, $product);
    }

    public function update($sku, Closure $action): void
    {
        $product = $this->pick($sku);

        $product->action($action);
    }

    public function remove($sku): void
    {
        $product = $this->pick($sku);

        $this->products->remove($sku);
    }

    public function flush(): void
    {
        foreach ($this->products as $product) {
            $this->remove($product->sku);
        }
    }

    public function has($sku)
    {
        return $this->products->containsKey($sku);
    }

    public function discount(Discount $discount): void
    {
        $this->discount = $discount;
    }

    public function delivery(Money $delivery): void
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
}
