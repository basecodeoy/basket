<?php

declare(strict_types=1);

namespace PreemStudio\Basket\Formatters;

use Locale;
use Money\Money;
use NumberFormatter;
use PreemStudio\Basket\Contracts\Formatter;
use PreemStudio\Basket\Discounts\ValueDiscount;
use PreemStudio\Basket\Money as MoneyInterface;

final class MoneyFormatter implements Formatter
{
    /**
     * @var null
     */
    private $locale;

    private static $currencies;

    /**
     * MoneyFormatter constructor.
     *
     * @param  null  $locale
     */
    public function __construct($locale = null)
    {
        $this->locale = $locale;

        if (! isset(static::$currencies)) {
            static::$currencies = json_read(__DIR__.'/../../resources/data/currencies.json');
        }
    }

    public function format($value): string
    {
        $formatter = new NumberFormatter($this->locale(), NumberFormatter::CURRENCY);

        if ($value instanceof MoneyInterface) {
            $value = $value->toMoney();
        }

        if ($value instanceof ValueDiscount) {
            $value = $value->rate();
        }

        $code    = $this->code($value);
        $divisor = $this->divisor($code);
        $amount  = $this->convert($value, $divisor);

        return $formatter->formatCurrency($amount, $code);
    }

    /**
     * @return null|string
     */
    private function locale(): string
    {
        if ($this->locale) {
            return $this->locale;
        }

        return Locale::getDefault();
    }

    /**
     * @return mixed
     */
    private function code(Money $value): string
    {
        return $value->getCurrency()->getCode();
    }

    /**
     * @return mixed
     */
    private function divisor($code): int
    {
        return static::$currencies[$code]->subunit_to_unit;
    }

    /**
     * @return string
     */
    private function convert(Money $money, $divisor): float
    {
        return (float) number_format(($money->getAmount() / $divisor), 2, '.', '');
    }
}
