# Laravel Response Macros

[![Latest Version on Packagist](https://img.shields.io/packagist/v/appstract/laravel-response-macros.svg?style=flat-square)](https://packagist.org/packages/appstract/laravel-response-macros)
[![Total Downloads](https://img.shields.io/packagist/dt/appstract/laravel-response-macros.svg?style=flat-square)](https://packagist.org/packages/appstract/laravel-response-macros)
[![Software License](https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square)](LICENSE.md)
[![Build Status](https://img.shields.io/travis/appstract/laravel-response-macros/master.svg?style=flat-square)](https://travis-ci.org/appstract/laravel-response-macros)

This package is a collection of custom response macros that you can re-use in a variety of your routes and controllers.

## Installation

You can install the package via composer:

``` bash
composer require appstract/laravel-response-macros
```

## Usage

### Message
``` php
return response()->message('hello world!', 200);
```

Result

``` json
{
    "message": "hello world!"
}
```
With the Http `Status Code: 200`

### Error
``` php
return response()->error('Something went wrong', $statuscode = 400);
```

Result

``` json
{
    "message": "Something went wrong"
}
```
With the Http `Status Code: 400`

### Success
``` php
return response()->success(['some' => 'data'], $statuscode = 200);
```

Result

``` json
{
    "data": {"some": "data"}
}
```
With the Http `Status Code: 200`

### PDF

Creates a (downloadable) PDF response from PDF contents.

``` php
return response()->pdf($pdfData, 'filename.pdf', $download = false);
```

## Testing

``` bash
$ composer test
```

## Contributing

Contributions are welcome, [thanks to y'all](https://github.com/appstract/laravel-blade-directives/graphs/contributors) :)

## About Appstract

Appstract is a small team from The Netherlands. We create (open source) tools for webdevelopment and write about related subjects on [Medium](https://medium.com/appstract). You can [follow us on Twitter](https://twitter.com/teamappstract), [buy us a beer](https://www.paypal.me/teamappstract/10) or [support us on Patreon](https://www.patreon.com/appstract).

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
