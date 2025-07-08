# Laravel Notes – Simple note tracking for Eloquent models

[![Latest Version on Packagist](https://img.shields.io/packagist/v/daniellefence/notes.svg?style=flat-square)](https://packagist.org/packages/daniellefence/notes)
[![Total Downloads](https://img.shields.io/packagist/dt/daniellefence/notes.svg?style=flat-square)](https://packagist.org/packages/daniellefence/notes)
![GitHub Actions](https://github.com/daniellefence/notes/actions/workflows/main.yml/badge.svg)

Laravel Notes is a lightweight, flexible package that adds user-authored notes to any Eloquent model. Notes are timestamped, associated with a user, and designed to be easily integrated into admin dashboards or activity logs. Fully compatible with Laravel 10+, Livewire, and Tailwind UI components. 

## Installation

You can install the package via composer:

```bash
composer require daniellefence/notes
```

## Usage

```php
use DanielleFence\Notes\Models\Note;

$model->notes()->create([
    'body' => 'This is a note.',
    'user_id' => auth()->id(),
]);

$notes = $model->notes; // returns all notes associated with the model
```

## Testing

```bash
composer test
```

### Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security

If you discover any security related issues, please email sbarron@daniellefence.net instead of using the issue tracker.

## Credits

-   [Shane Barron](https://github.com/daniellefence)
-   [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

## Developed and Maintained By

Developed and maintained by the IT/Marketing department at Danielle Fence and Outdoor Living.
