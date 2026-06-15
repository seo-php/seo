---
title: Schema.org for Laravel
description: Laravel integration for seophp/schema-org — JSON-LD structured data via Head.
outline: deep
---

# Schema.org for Laravel

Laravel integration for [seophp/schema-org](/packages/schema-org/). Registers a request-scoped `Graph` and wires it to [seophp/head](/packages/head/) via `SchemaOrgPlugin`, so JSON-LD is rendered automatically in your HTML `<head>`.

## Requirements

- PHP 8.4 or higher
- Laravel 12 or higher

## Installation

Install via [Composer](https://getcomposer.org):

```bash
composer require seophp/schema-org-laravel
```

Then run the install command to scaffold your service provider:

```bash
php artisan schema-org:install
```

This will:
- Create `app/Providers/SchemaOrgServiceProvider.php` in your application
- Register it automatically in `bootstrap/providers.php`

## Configuration

All configuration lives inside the generated service provider. Override the `configure` method to add types to the `Graph`:

```php
<?php

declare(strict_types=1);

namespace App\Providers;

use Seo\SchemaOrg\Graph;
use Seo\SchemaOrg\Laravel\Providers\SchemaOrgServiceProvider as ServiceProvider;
use Seo\SchemaOrg\Types\Organization;
use Seo\SchemaOrg\Types\WebSite;

final class SchemaOrgServiceProvider extends ServiceProvider
{
    protected function configure(Graph $graph): void
    {
        $graph->add(
            Organization::make()
                ->id('https://example.com/#organization')
                ->name('Example Inc.')
                ->url('https://example.com'),
        );

        $graph->add(
            WebSite::make()
                ->id('https://example.com/#website')
                ->name('Example')
                ->url('https://example.com'),
        );
    }
}
```

The `Graph` is registered as a scoped singleton — one instance per request. Inject it anywhere in your application to add page-specific structured data:

```php
use Seo\SchemaOrg\Graph;
use Seo\SchemaOrg\Types\Article;

final class ShowArticle extends Component
{
    public Article $article;

    public function render(): mixed
    {
        app(Graph::class)->add(
            Article::make()
                ->headline($this->article->title)
                ->datePublished($this->article->published_at),
        );

        return view('livewire.show-article');
    }
}
```

When [Head](/packages/head/laravel) renders, the JSON-LD `<script type="application/ld+json">` tag is included automatically.

## Head dependency

This package requires `seophp/head-laravel`. The install command for Head (`php artisan head:install`) should be run first if you are not using the [seo-laravel](/packages/seo-laravel) meta-package.
