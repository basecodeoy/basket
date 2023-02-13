<?php

declare(strict_types=1);

namespace PreemStudio\Basket\Contracts;

use PreemStudio\Basket\Basket;

interface MetaData
{
    /**
     * @param  Basket  $basket
     * @return mixed
     */
    public function generate(Basket $basket);

    /**
     * @return mixed
     */
    public function name();
}
