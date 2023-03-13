<?php

declare(strict_types=1);

namespace PreemStudio\Basket;

use Closure;
use Money\Money;
use PreemStudio\Basket\Contracts\Category;
use PreemStudio\Basket\Contracts\Discount;
use PreemStudio\Basket\Contracts\TaxRate;

class Product
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
        $this->coupons = new Collection;
        $this->tags = new Collection;
        $this->discounts = new Collection;
        $this->attributes = new Collection;
    }

    public function quantity($quantity)
    {
        $this->quantity = $quantity;
    }

    public function increment()
    {
        $this->quantity++;
    }

    public function decrement()
    {
        $this->quantity--;
    }

    public function freebie($status)
    {
        $this->freebie = $status;
    }

    public function taxable($status)
    {
        $this->taxable = $status;
    }

    /**
     * Set the tax rate.
     *
     * @param  int  $rate
     */
    public function rate($rate)
    {
        $this->rate = $rate;
    }

    public function delivery(Money $delivery)
    {
        if ($this->price->isSameCurrency($delivery)) {
            $this->delivery = $delivery;
        }
    }

    public function coupon(Coupon $coupon)
    {
        $this->coupons->push($coupon);
    }

    public function tags($tag)
    {
        $this->tags->push($tag);
    }

    public function discount(Discount $discount)
    {
        $this->discounts->add(0, $discount);
    }

    /**
     * Add an attribute.
     *
     * @param  string  $key
     * @param  mixed  $value
     */
    public function attributes($key, $value)
    {
        $this->attributes->add($key, $value);
    }

    public function category(Category $category)
    {
        $this->category = $category;

        $this->category->categorise($this);
    }

    public function action(Closure $actions)
    {
        call_user_func($actions, $this);
    }

    /**
     * @return mixed
     */
    public function __get($key)
    {
        if (property_exists($this, $key)) {
            return $this->$key;
        }

        if ($this->attributes->has($key)) {
            return $this->attributes->get($key);
        }
    }
}
