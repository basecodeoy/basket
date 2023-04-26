<?php

declare(strict_types=1);

namespace BombenProdukt\Basket\Formatters;

use BombenProdukt\Basket\Contracts\Formatter;

final class CollectionFormatter implements Formatter
{
    /**
     * @param  mixed $value
     * @return mixed
     */
    public function format($value): array
    {
        return $value->toArray();
    }
}
