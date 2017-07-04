# Laravel Response Macros

[![Latest Version on Packagist](https://img.shields.io/packagist/v/appstract/:package_name.svg?style=flat-square)](https://packagist.org/packages/appstract/:package_name)
[![Total Downloads](https://img.shields.io/packagist/dt/appstract/:package_name.svg?style=flat-square)](https://packagist.org/packages/appstract/:package_name)
[![Software License](https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square)](LICENSE.md)
[![Build Status](https://img.shields.io/travis/appstract/:package_name/master.svg?style=flat-square)](https://travis-ci.org/appstract/:package_name)

This is where your description should go. Try and limit it to a paragraph or two, and maybe throw in a mention of what PSRs you support to avoid any confusion with users and contributors. Create a link to a medium article.

## Installation

You can install the package via composer:

``` bash
composer require appstract/:package_name
```

### Provider

Then add the ServiceProvider to your `config/app.php` file:

```
'providers' => [
    ...

    Appstract\Skeleton\ResponseMacrosServiceProvider::class

    ....
```

## Usage

``` php
return response()->message('hello world!', 200);
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
