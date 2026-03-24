---
title: LLMS.txt for Laravel
description: Laravel integration for seophp/llms-txt — serve a dynamic llms.txt response.
outline: deep
---

# LLMS.txt for Laravel

Laravel integration for [seophp/llms-txt](/packages/llms-txt/). Serves a dynamic `llms.txt` response via a service provider you define in your application.

## Requirements

- PHP 8.4 or higher
- Laravel 12 or higher

## Installation

Install via [Composer](https://getcomposer.org):

```bash
composer require seophp/llms-txt-laravel
```

Then run the install command to scaffold your service provider:

```bash
php artisan llms-txt:install
```

This will:
- Create `app/Providers/LlmsTxtServiceProvider.php` in your application
- Register it automatically in `bootstrap/providers.php`

## Configuration

All configuration lives inside the generated service provider. Implement the `configure` method, which receives a `LlmsTxtConfig` instance:

```php
<?php

declare(strict_types=1);

namespace App\Providers;

use Seo\LlmsTxt\Laravel\LlmsTxtConfig;
use Seo\LlmsTxt\Laravel\Providers\LlmsTxtServiceProvider as ServiceProvider;
use Seo\LlmsTxt\LlmsTxtBuilder;
use Seo\LlmsTxt\LlmsTxtSectionBuilder;

final class LlmsTxtServiceProvider extends ServiceProvider
{
    protected function configure(LlmsTxtConfig $config): void
    {
        $config->llmsTxt(
            fn () => (new LlmsTxtBuilder())
                ->title('My Site')
                ->description('Description of my site')
                ->section(
                    fn (LlmsTxtSectionBuilder $section) => $section
                        ->title('Docs')
                        ->link('Getting Started', 'https://example.com/docs/getting-started'),
                )
                ->build(),
        );
    }
}
```

The route `/llms.txt` is registered automatically when the provider is loaded.

### Environments

The `llmsTxt` closure is only called in `production` and `local` environments. In all other environments (e.g. `staging`), the route returns a `404` response. This prevents non-production deployments from exposing site structure to LLMs without any extra configuration.

### Middleware

Apply middleware to the `/llms.txt` route via `middleware()`:

```php
$config->middleware(['throttle:60,1']);
```

### Domain constraints

Restrict the route to a specific domain or subdomain. This is useful in monorepo setups where multiple apps share the same Laravel installation but each needs its own `llms.txt`:

```php
// App\Providers\MarketingLlmsTxtServiceProvider
$config
    ->domain('marketing.example.com')
    ->llmsTxt(fn () => (new LlmsTxtBuilder())
        ->title('Marketing Site')
        ->description('Our marketing content')
        ->build()
    );

// App\Providers\DocsLlmsTxtServiceProvider
$config
    ->domain('docs.example.com')
    ->llmsTxt(fn () => (new LlmsTxtBuilder())
        ->title('Documentation')
        ->description('Technical documentation')
        ->section(
            fn (LlmsTxtSectionBuilder $section) => $section
                ->title('Guides')
                ->link('Getting Started', 'https://docs.example.com/getting-started'),
        )
        ->build()
    );
```

Register each as a separate provider in `bootstrap/providers.php`.

If `domain()` is not called, the config acts as a catch-all and matches any host. This is the correct setup for single-app projects and also works as a fallback in monorepo setups alongside domain-specific providers:

```php
// App\Providers\DocsLlmsTxtServiceProvider — only for docs.example.com
$config
    ->domain('docs.example.com')
    ->llmsTxt(fn () => (new LlmsTxtBuilder())
        ->title('Documentation')
        ->build()
    );

// App\Providers\LlmsTxtServiceProvider — catch-all for all other domains
$config->llmsTxt(fn () => (new LlmsTxtBuilder())
    ->title('My Site')
    ->description('Description of my site')
    ->build()
);
```
