<?php

declare(strict_types=1);

namespace BombenProdukt\Basket;

use BombenProdukt\Basket\Formatters\CategoryFormatter;
use BombenProdukt\Basket\Formatters\CollectionFormatter;
use BombenProdukt\Basket\Formatters\CouponFormatter;
use BombenProdukt\Basket\Formatters\MoneyFormatter;
use BombenProdukt\Basket\Formatters\PercentFormatter;
use BombenProdukt\Basket\Formatters\QuantityFormatter;
use BombenProdukt\Basket\Formatters\TaxRateFormatter;

final class Converter
{
    /**
     * @var array
     */
    private $formatters;

    /**
     * Converter constructor.
     */
    public function __construct(array $formatters = [])
    {
        $bootstrap = [
            'Category' => new CategoryFormatter(),
            'Collection' => new CollectionFormatter(),
            'Coupon' => new CouponFormatter(),
            'Money' => new MoneyFormatter(),
            'Percent' => new PercentFormatter(),
            'PercentageDiscount' => new PercentFormatter(),
            'TaxRate' => new TaxRateFormatter(),
            'QuantityDiscount' => new QuantityFormatter(),
            'ValueDiscount' => new MoneyFormatter(),
        ];

        $this->formatters = \array_merge($bootstrap, $formatters);
    }

    /**
     * @param  mixed $value
     * @return array
     */
    public function convert($value)
    {
        if (!\is_object($value)) {
            return $value;
        }

        if ($value instanceof Collection) {
            return $value->map(function ($item) {
                return $this->formatter($item)->format($item);
            })->toArray();
        }

        return $this->formatter($value)->format($value);
    }

    /**
     * @param  mixed $object
     * @return mixed
     */
    public function formatter($object)
    {
        $interfaces = \class_implements($object);

        foreach ($interfaces as $interface) {
            $class = $this->getClassName($interface);

            if ($object instanceof Collection) {
                if ($object->first() instanceof Coupon) {
                    return $this->formatters['Coupon'];
                }
            }

            if (isset($this->formatters[$class])) {
                return $this->formatters[$class];
            }
        }

        $class = $this->getClassName($object::class);

        return $this->formatters[$class];
    }

    /**
     * @param  mixed $namespace
     * @return mixed
     */
    private function getClassName($namespace)
    {
        $namespace = \explode('\\', $namespace);

        return \array_pop($namespace);
    }
}
