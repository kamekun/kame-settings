# Kame Settings Module

This package provides the settings module for the _KAME_, a simple cms made with laravel, livewrire and tailwind.

### Requirements

    PHP >= 7.1
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

### Database

Create table for database Model

```bash
php artisan migrate
```

### Configure

You can change the options of your app from `config/setting.php` file

### Facade

```php
Setting::get('foo', 'default');
// Parameters ley, value, readOnly
(ReadOnly attributes are for properties/cofiguration that shouldn't delete from the backend panel)
Setting::set('foo', 'default', true);
```

### Blade Directive

You can get the settings directly in your blade templates using the helper method or the blade directive like `@setting('foo')`

### Contributing

I am open to contributions to this package, and will do the best I can to maintain it over time.
Pull requests are welcome, and in fact encouraged. Right now there are no specific guidelines for a PR.

### Road Map

Some considerations for future versions:

- Add Support for caching Settings
- Add support for save / read settings from json file

### Credits and License

- Taylor Otwell and co. for Laravel

- Caleb Porzio for livewire

- Adam Wathan for Tailwind labs

This project is licensed under the MIT License - see the [License File](LICENSE) for details
