<?php namespace Nwidart\MoneyFormatter\Tests;

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
}
