# Arrounded/extractors

[![Build Status](http://img.shields.io/travis/arrounded/extractors.svg?style=flat-square)](https://travis-ci.org/arrounded/extractors)
[![Latest Stable Version](http://img.shields.io/packagist/v/arrounded/extractors.svg?style=flat-square)](https://packagist.org/packages/arrounded/extractors)
[![Total Downloads](http://img.shields.io/packagist/dt/arrounded/extractors.svg?style=flat-square)](https://packagist.org/packages/arrounded/extractors)
[![Scrutinizer Quality Score](http://img.shields.io/scrutinizer/g/arrounded/extractors.svg?style=flat-square)](https://scrutinizer-ci.com/g/arrounded/extractors/)
[![Code Coverage](http://img.shields.io/scrutinizer/coverage/g/arrounded/extractors.svg?style=flat-square)](https://scrutinizer-ci.com/g/arrounded/extractors/)

## Install

Via Composer

``` bash
$ composer require arrounded/extractors
```

## Usage

The idea is that you extend the existing extractors, which provide the minimal functionality, and tweak it for your use case.

For example (using the `CsvExtractor`)

```php
class MyExtractor extends CsvExtractor {

   public function getData(array $data = [])
   {
        // $data contains the entire content of a row in the CSV

        // You can return whatever you need from the row.
        return $data;
   }
}

// Using the extractor

$extractor = new MyExtractor();
$extractor->setFixture('path/to/data.csv');
$extractor->run(function ($data) {
    // $data contains whatever is the output of `MyExtractor::getData()`.

    // Persist in database
});
```

## Testing

``` bash
$ composer test
```

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
