<?php

declare(strict_types=1);

namespace PreemStudio\Basket\Formatters;

use PreemStudio\Basket\Contracts\Formatter;

class CollectionFormatter implements Formatter
{
    /**
     * @param $value
     * @return mixed
     */
    public function format($value): array
    {
        return $value->toArray();
    }
}
