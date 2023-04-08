<?php

declare(strict_types=1);

namespace PreemStudio\Basket;

final class Coupon
{
    private $identifier;

    /**
     * @var Collection
     */
    private $discounts;

    /**
     * Coupon constructor.
     *
     * @param mixed $identifier
     */
    public function __construct($identifier)
    {
        $this->identifier = $identifier;
        $this->discounts = new Collection();
    }

    /**
     * @return mixed
     */
    public function identifier()
    {
        return $this->identifier;
    }

    /**
     * @return Collection
     */
    public function discounts()
    {
        return $this->discounts;
    }

    /**
     * @return int
     */
    public function count()
    {
        return $this->discounts->count();
    }

    /**
     * @param  mixed $index
     * @return mixed
     */
    public function pick($index)
    {
        return $this->discounts->get($index);
    }

    public function add($discount): void
    {
        $this->discounts->push($discount);
    }

    public function remove($index): void
    {
        $this->discounts->remove($index);
    }

    /**
     * @return string
     */
    public function serialize()
    {
        return \serialize($this);
    }
}
