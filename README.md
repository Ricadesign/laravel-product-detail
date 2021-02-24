# Laravel Coupon

This composer package offers a setup to redeem coupon codes on ecommerce sites. It enables the use of several types of discounts, while offering the possibility of limiting user redemption by different means.

This composer package offers a basic setup for displaying product detail page.

## Installation

Begin by pulling in the package through Composer.

```bash
composer require ricadesign/laravel-product-detail
```

Next, if using Laravel 5, include the service provider within your `config/app.php` file. From version 5.5 and thanks to [package autodiscovery](https://laravel-news.com/package-auto-discovery) this is no longer necesary.

```php
'providers' => [
    Ricadesign\LaravelProductDetail\LaravelProductDetailServiceProvider::class,
];
```

## Publishing all needed stuff

In order for the package to work properly, it is needed publish view and sass file:

```bash
php artisan vendor:publish --tag=product[config-sass-view]
```

You can also publish migration and model in case you need them:

```bash
php artisan vendor:publish --tag=product[migration-model]
```

## Usage

Once installed you can navigate to **/product/{id}**. A product detail's mock up will be displayed, fully customizable by views/vendor/product/indexphp and sass/vendor/product/product-detail.scss previously published.


You can change the path from product.php published in config directory.

## Future implementation

Automatically check if migration products is already created to publish or not migrations.
