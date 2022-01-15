# KaMe Settings

[![Latest Version on Packagist](https://img.shields.io/packagist/v/kamekun/kame-settings.svg?style=flat-square)](https://packagist.org/packages/kamekun/kame-settings)
[![Total Downloads](https://img.shields.io/packagist/dt/kamekun/kame-settings.svg?style=flat-square)](https://packagist.org/packages/kamekun/kame-settings)

This package provides the settings module for the _KAME_, a simple cms made with laravel, livewire and tailwind.

### Requirements

    PHP >= 7.3|8.0
    Laravel >=7.X

### Installation

Install via composer:

```bash
composer require kamekun/kame-settings
```

### Publish

Publish config file.

```bash
php artisan vendor:publish --tag=setting
```

### Configure

You can change the options of your app from `config/kame-settings.php` file

### Database

Create table for database Model

```bash
php artisan migrate
```

### Facade

```php
// Parameters: key, value
Setting::get('foo', 'default');
// Parameters: key, value, readOnly (optional, default false)
Setting::set('foo', 'default');
// Note: (ReadOnly attributes are for properties/configuration that shouldn't delete from the backend panel)
```

### Blade Directive

You can get the settings directly in your blade templates using the helper method or the blade directive like `@setting('foo')`

### Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

### Contributing

I am open to contributions to this package, and will do the best I can to maintain it over time.
Pull requests are welcome, and in fact encouraged. Right now there are no specific guidelines for a PR.

### Road Map

Some considerations for future versions:

- Add Support for caching Settings
- Add support for save / read settings from json file

### Credits and License

- [KaMekuN](https://github.com/kamekun)

- Taylor Otwell and co. for Laravel

- Caleb Porzio for livewire

- Adam Wathan for Tailwind labs

This project is licensed under the MIT License - see the [License File](LICENSE) for details
