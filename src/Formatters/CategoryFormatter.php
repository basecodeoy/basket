<?php

declare(strict_types=1);

namespace BombenProdukt\Basket\Formatters;

use BombenProdukt\Basket\Contracts\Formatter;

final class CategoryFormatter implements Formatter
{
    /**
     * @param  mixed $value
     * @return mixed
     */
    public function format($value): string
    {
        $namespace = \explode('\\', $value::class);
        $class = \array_pop($namespace);
        $regex = '/(?<!^)((?<![[:upper:]])[[:upper:]]|[[:upper:]](?![[:upper:]]))/';

        return \preg_replace($regex, ' $1', $class);
    }
}
