---
title: Head for Laravel
description: Laravel integration for seophp/head — manage HTML head tags in Laravel.
outline: deep
---

# Head for Laravel

Laravel integration for [seophp/head](/packages/head/). Manage and render HTML `<head>` tags via a service provider, a Blade layout component, and plugins for Vite and Livewire.

## Requirements

- PHP 8.4 or higher
- Laravel 12 or higher

## Installation

Install via [Composer](https://getcomposer.org):

```bash
composer require seophp/head-laravel
```

Then run the install command to scaffold your service provider:

```bash
php artisan head:install
```

This will:
- Create `app/Providers/HeadServiceProvider.php` in your application
- Register it automatically in `bootstrap/providers.php`
- Auto-detect Livewire and add the `LivewireAssetsPlugin` if installed
- Add `LaravelVitePlugin` with default entry points

Use `--force` to overwrite an existing provider:

```bash
php artisan head:install --force
```

## Configuration

All configuration lives inside the generated service provider. Implement the `configure` method, which receives a `Head` instance:

```php
<?php

declare(strict_types=1);

namespace App\Providers;

use Seo\Head\Head;
use Seo\Head\Laravel\Head\Plugins\LaravelVitePlugin;
use Seo\Head\Laravel\Head\Plugins\LivewireAssetsPlugin;
use Seo\Head\Laravel\Providers\HeadServiceProvider as ServiceProvider;
use Seo\Head\Plugins\TitleTemplatePlugin;

final class HeadServiceProvider extends ServiceProvider
{
    protected function configure(Head $head): void
    {
        $head->plugins([
            LaravelVitePlugin::make(entrypoints: ['resources/css/app.css', 'resources/js/app.js']),
            LivewireAssetsPlugin::make(useScriptConfig: true),
            TitleTemplatePlugin::make(static fn (string $title) => "{$title} | My App"),
        ]);

        $head->html(lang: $this->app->getLocale());
        $head->body(class: 'min-h-screen bg-white antialiased');

        $head->meta(charset: 'utf-8');
        $head->meta(name: 'viewport', content: 'width=device-width, initial-scale=1.0');
    }
}
```

The `Head` instance is registered as a singleton in the container, so all configuration is shared across the request.

## Layout component

The package provides a `<x-head::layout>` Blade component that renders the full HTML document structure with all configured head tags and body attributes:

```blade
<!-- resources/views/layouts/app.blade.php -->
<x-head::layout>
    <header>
        <!-- your header -->
    </header>

    {{ $slot }}

    <footer>
        <!-- your footer -->
    </footer>
</x-head::layout>
```

This renders:

```html
<!DOCTYPE html>
<html lang="en" class="...">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>My Page | My App</title>
        <!-- Vite assets, styles, etc. -->
    </head>
    <body class="min-h-screen bg-white antialiased">
        <!-- body open tags (e.g. Livewire scripts) -->
        <header>...</header>
        ...
        <footer>...</footer>
        <!-- body close tags (e.g. deferred scripts) -->
    </body>
</html>
```

Tags are automatically placed in the correct position (`<head>`, after `<body>`, or before `</body>`) based on their `HeadTagPosition`.

## Plugins

### LaravelVitePlugin

Automatically injects Vite-generated CSS and JS asset tags into the head. Replaces the need for `@vite()` in your Blade templates:

```php
use Seo\Head\Laravel\Head\Plugins\LaravelVitePlugin;

LaravelVitePlugin::make(
    entrypoints: ['resources/css/app.css', 'resources/js/app.js'],
);
```

You can specify a custom build directory:

```php
LaravelVitePlugin::make(
    entrypoints: ['resources/css/app.css', 'resources/js/app.js'],
    buildDirectory: 'custom-build',
);
```

### LivewireAssetsPlugin

Automatically injects Livewire's required CSS and JavaScript assets:

```php
use Seo\Head\Laravel\Head\Plugins\LivewireAssetsPlugin;

LivewireAssetsPlugin::make(useScriptConfig: true);
```

- Styles are placed in the `<head>` section
- Scripts are placed before `</body>`
- Set `useScriptConfig: true` to use Livewire's script config instead of the full script bundle

## Per-page SEO with Livewire

When using Livewire, you can set per-page SEO meta tags using the `SeoMeta` API. Resolve the `Head` instance from the container in your Livewire component's rendering phase:

```php
<?php

use Livewire\Component;
use Seo\Head\Head;
use Seo\Head\SeoMeta;

final class ShowArticle extends Component
{
    public Article $article;

    public function render(): mixed
    {
        SeoMeta::for(app(Head::class))
            ->title($this->article->title)
            ->description($this->article->excerpt)
            ->ogImage($this->article->image_url);

        return view('livewire.show-article');
    }
}
```

::: tip Livewire rendering hooks
If you use a base page component pattern, you can use Livewire's `rendering{TraitName}` hook convention to automatically inject SEO meta on every page. See the `SeoMeta` API in the [Head package docs](/packages/head/#seometa).
:::
