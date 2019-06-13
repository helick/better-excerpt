# Helick Better Excerpt

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Total Downloads][ico-downloads]][link-downloads]
[![Software License][ico-license]](LICENSE.md)
[![Quality Score][ico-code-quality]][link-code-quality]

The plugin enables TinyMCE editor for post excerpt.

## Requirements

Make sure all dependencies have been installed before moving on:

* [PHP](http://php.net/manual/en/install.php) >= 7.1
* [Composer](https://getcomposer.org/download/)

## Install

Via Composer:

``` bash
$ composer require helick/better-excerpt
```

## Usage

### Custom post type support

Control supported post types:

``` php
add_filter('helick_better_excerpt_supported_post_types', function (array $postTypes) {
    $postTypes[] = 'your-custom-post-type';

    return $postTypes;
});
```

Control the editor settings:

``` php
add_filter('helick_better_excerpt_editor_settings', function (array $settings) {
    $settings['media_buttons'] = true;

    return $settings;
});
```

Control the editor buttons:

``` php
add_filter('helick_better_excerpt_editor_buttons', function (array $buttons) {
    $buttons[] = 'alignleft';
    $buttons[] = 'alignright';
    $buttons[] = 'aligncenter';

    return $buttons;
});
```

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) and [CODE_OF_CONDUCT](CODE_OF_CONDUCT.md) for details.

## Security

If you discover any security related issues, please email evgenii@helick.io instead of using the issue tracker.

## Credits

- [Evgenii Nasyrov][link-author]
- [All Contributors][link-contributors]

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

[ico-version]: https://img.shields.io/packagist/v/helick/better-excerpt.svg?style=flat-square
[ico-license]: https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square
[ico-code-quality]: https://img.shields.io/scrutinizer/g/helick/better-excerpt.svg?style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/helick/better-excerpt.svg?style=flat-square

[link-packagist]: https://packagist.org/packages/helick/better-excerpt
[link-code-quality]: https://scrutinizer-ci.com/g/helick/better-excerpt
[link-downloads]: https://packagist.org/packages/helick/better-excerpt
[link-author]: https://github.com/nasyrov
[link-contributors]: ../../contributors
