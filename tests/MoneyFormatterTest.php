<?php namespace Nwidart\MoneyFormatter\tests;

use Money\Currency;
use Money\Money;
use Nwidart\MoneyFormatter\MoneyFormatter;

class MoneyFormatterTest extends \PHPUnit_Framework_TestCase
{
    /** @test */
    public function should_format_as_english_pounds()
    {
        $formatter = new MoneyFormatter('en_GB');
        $this->assertEquals('£10.00', $formatter->format(new Money(1000, new Currency('GBP'))));
    }

    /** @test */
    public function should_format_as_american_dollars()
    {
        $formatter = new MoneyFormatter('en_US');
        $this->assertEquals('$10.00', $formatter->format(new Money(1000, new Currency('USD'))));
    }

    public function should_format_as_european_euros()
    {
        $formatter = new MoneyFormatter('fr_BE');
        $this->assertEquals('10,00 €', $formatter->format(new Money(1000, new Currency('EUR'))));
    }

    /** @test */
    public function it_should_format_currency_without_currency_symbol()
    {
        $formatter = new MoneyFormatter('fr_BE');
        $this->assertEquals('10,5', $formatter->formatWithoutCurrency(new Money(1050, new Currency('EUR'))));
    }

    /** @test */
    public function it_should_format_currency_without_currency_symbol_us()
    {
        $formatter = new MoneyFormatter('en_US');
        $this->assertEquals('10.5', $formatter->formatWithoutCurrency(new Money(1050, new Currency('USD'))));
    }

    /** @test */
    public function it_should_use_current_locale_if_none_provided()
    {
        $formatter = new MoneyFormatter();
        $this->assertEquals('10.5', $formatter->formatWithoutCurrency(new Money(1050, new Currency('USD'))));
    }
}
