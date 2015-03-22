# MoneyFormatter

[![Latest Version](https://img.shields.io/github/release/nwidart/MoneyFormatter.svg?style=flat-square)](https://github.com/nwidart/MoneyFormatter/releases)
[![Software License](https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square)](LICENSE.md)
[![Build Status](https://img.shields.io/travis/nWidart/MoneyFormatter/master.svg?style=flat-square)](https://travis-ci.org/nwidart/MoneyFormatter)
[![Coverage Status](https://img.shields.io/scrutinizer/coverage/g/nwidart/MoneyFormatter.svg?style=flat-square)](https://scrutinizer-ci.com/g/nwidart/MoneyFormatter/code-structure)
[![Quality Score](https://img.shields.io/scrutinizer/g/nwidart/MoneyFormatter.svg?style=flat-square)](https://scrutinizer-ci.com/g/nwidart/MoneyFormatter)
[![Total Downloads](https://img.shields.io/packagist/dt/nwidart/money-formatter.svg?style=flat-square)](https://packagist.org/packages/nwidart/money-formatter)

A simple package used for formatting a [`Money\Money`](https://github.com/mathiasverraes/money) value object.

Money is usually not stored as a float in your database, though your clients/users don't want to see `1000` meaning, 10. This package receives an amount in cents, and displays it according to the given locale with or with the currency symbol.

**Todo** Move the Facade and Service Provider to own dedicated package.

## Install

Via Composer

``` bash
$ composer require nwidart/money-formatter
```

## Usage

To format money in **cents**:

``` php
$formatter = new MoneyFormatter('en_US');
$formattedMoney = $formatter->format(new Money(1000, new Currency('USD')));
# output : $10.00
```

Sometimes you may wish to not have the currency symbol, this can be done like so:

``` php
$formatter = new MoneyFormatter('en_US');
$formattedMoney = $formatter->formatWithoutCurrency(new Money(1000, new Currency('USD')));
# output : 10.00
```

This can be useful if your currency selection is a separate dropdown, for instance.

## Testing

``` bash
$ phpunit
```

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Credits

- [Nicolas Widart](https://github.com/nWidart)
- [Philip Brown](https://github.com/philipbrown) for the inspiration from his Basket package. Decided to extract the MoneyFormatter class to a dedicated package.
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
