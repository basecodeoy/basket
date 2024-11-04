<?php

declare(strict_types=1);

namespace BaseCodeOy\Basket;

use BaseCodeOy\Basket\Contracts\Category;
use BaseCodeOy\Basket\Contracts\Discount;
use BaseCodeOy\Basket\Contracts\TaxRate;
use Closure;
use Money\Money;

final class Product
{
    private $sku;

    private $name;

    /**
     * @var Money
     */
    private $price;

    /**
     * @var TaxRate
     */
    private $rate;

    /**
     * @var int
     */
    private $quantity;

    /**
     * @var bool
     */
    private $freebie;

    /**
     * @var bool
     */
    private $taxable;

    /**
     * @var Money
     */
    private $delivery;

    /**
     * @var Collection
     */
    private $coupons;

    /**
     * @var Collection
     */
    private $tags;

    /**
     * @var Collection
     */
    private $discounts;

    /**
     * @var string
     */
    private $category;

    /**
     * @var Collection
     */
    private $attributes;

    /**
     * Product constructor.
     *
     * @param mixed $sku
     * @param mixed $name
     */
    public function __construct($sku, $name, Money $price, TaxRate $rate)
    {
        $this->sku = $sku;
        $this->name = $name;
        $this->price = $price;
        $this->rate = $rate;
        $this->quantity = 1;
        $this->freebie = false;
        $this->taxable = true;
        $this->delivery = new Money(0, $price->getCurrency());
        $this->coupons = new Collection();
        $this->tags = new Collection();
        $this->discounts = new Collection();
        $this->attributes = new Collection();
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

        if ($this->attributes->has($key)) {
            return $this->attributes->get($key);
        }
    }

    public function quantity($quantity): void
    {
        $this->quantity = $quantity;
    }

    public function increment(): void
    {
        $this->quantity++;
    }

    public function decrement(): void
    {
        $this->quantity--;
    }

    public function freebie($status): void
    {
        $this->freebie = $status;
    }

    public function taxable($status): void
    {
        $this->taxable = $status;
    }

    /**
     * Set the tax rate.
     *
     * @param int $rate
     */
    public function rate($rate): void
    {
        $this->rate = $rate;
    }

    public function delivery(Money $delivery): void
    {
        if ($this->price->isSameCurrency($delivery)) {
            $this->delivery = $delivery;
        }
    }

    public function coupon(Coupon $coupon): void
    {
        $this->coupons->push($coupon);
    }

    public function tags($tag): void
    {
        $this->tags->push($tag);
    }

    public function discount(Discount $discount): void
    {
        $this->discounts->add(0, $discount);
    }

    /**
     * Add an attribute.
     *
     * @param string $key
     * @param mixed  $value
     */
    public function attributes($key, $value): void
    {
        $this->attributes->add($key, $value);
    }

    public function category(Category $category): void
    {
        $this->category = $category;

        $this->category->categorise($this);
    }

    public function action(Closure $actions): void
    {
        $actions($this);
    }
}
