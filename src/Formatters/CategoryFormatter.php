<?php

declare(strict_types=1);

namespace PreemStudio\Basket\Formatters;

use PreemStudio\Basket\Contracts\Formatter;

final class CategoryFormatter implements Formatter
{
    /**
     * @return mixed
     */
    public function format($value): string
    {
        $namespace = explode('\\', get_class($value));
        $class     = array_pop($namespace);
        $regex     = '/(?<!^)((?<![[:upper:]])[[:upper:]]|[[:upper:]](?![[:upper:]]))/';

        return preg_replace($regex, ' $1', $class);
    }
}
