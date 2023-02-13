<?php

declare(strict_types=1);

namespace PreemStudio\Basket\Contracts;

interface Jurisdiction
{
    /**
     * @return mixed
     */
    public function rate();

    /**
     * @return mixed
     */
    public function currency();
}
