<?php

declare(strict_types=1);

namespace BombenProdukt\Basket\Formatters;

use Locale;
use Money\Money;
use NumberFormatter;
use BombenProdukt\Basket\Contracts\Formatter;
use BombenProdukt\Basket\Discounts\ValueDiscount;
use BombenProdukt\Basket\Money as MoneyInterface;

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
     * @param null $locale
     */
    public function __construct($locale = null)
    {
        $this->locale = $locale;

        if (!isset(self::$currencies)) {
            self::$currencies = json_read(__DIR__.'/../../resources/data/currencies.json');
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

        $code = $this->code($value);
        $divisor = $this->divisor($code);
        $amount = $this->convert($value, $divisor);

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
     * @param  mixed $code
     * @return mixed
     */
    private function divisor($code): int
    {
        return self::$currencies[$code]->subunit_to_unit;
    }

    /**
     * @param  mixed  $divisor
     * @return string
     */
    private function convert(Money $money, $divisor): float
    {
        return (float) \number_format($money->getAmount() / $divisor, 2, '.', '');
    }
}
