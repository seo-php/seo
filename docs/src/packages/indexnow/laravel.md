---
title: IndexNow for Laravel
description: Laravel integration for seophp/indexnow — serve the verification key and submit URLs.
outline: deep
---

# IndexNow for Laravel

Laravel integration for [seophp/indexnow](/packages/indexnow/). Serves the IndexNow key verification file dynamically and provides an `IndexNowClientManager` for submitting URLs via the [IndexNow](https://www.indexnow.org/) protocol.

## Requirements

- PHP 8.4 or higher
- Laravel 12 or higher

## Installation

Install via [Composer](https://getcomposer.org):

```bash
composer require seophp/indexnow-laravel
```

Then run the install command to scaffold your service provider:

```bash
php artisan indexnow:install
```

This will:
- Create `app/Providers/IndexNowServiceProvider.php` in your application
- Register it automatically in `bootstrap/providers.php`

## Configuration

All configuration lives inside the generated service provider. Implement the `configure` method, which receives an `IndexNowConfig` instance:

```php
<?php

declare(strict_types=1);

namespace App\Providers;

use Seo\IndexNow\Endpoint;
use Seo\IndexNow\Laravel\IndexNowConfig;
use Seo\IndexNow\Laravel\Providers\IndexNowServiceProvider as ServiceProvider;

final class IndexNowServiceProvider extends ServiceProvider
{
    protected function configure(IndexNowConfig $config): void
    {
        $config
            ->host((string) parse_url((string) config('app.url'), PHP_URL_HOST))
            ->key('your-api-key')
            ->endpoint(Endpoint::Global)
        ;
    }
}
```

| Method | Description |
|---|---|
| `host(string $host)` | The hostname submitted to IndexNow (without scheme or path) |
| `key(string $key)` | Your IndexNow API key (8–128 characters, `[a-zA-Z0-9-]`) |
| `keyLocation(?string $keyLocation)` | Optional full URL to the key file if not served at `/{key}.txt` |
| `endpoint(?Endpoint $endpoint)` | Search engine endpoint; defaults to `Endpoint::Global` |
| `domain(?string $domain)` | Restrict this config to a specific domain |
| `middleware(array $middleware)` | Middleware applied to the key verification route |

::: info API key
The `key` must be a string of 8–128 characters containing only letters (`a-z`, `A-Z`), digits (`0-9`), and dashes (`-`). Search engines verify ownership by fetching a text file containing the key. This package serves that file automatically — no static file in `public/` is required.
:::

### Key verification route

When a key is configured, the package registers a route that serves the key as plain text at `/{key}.txt` by default. If `keyLocation` is set, the route is registered at the path component of that URL instead.

The route is not registered when `key` is empty, so you can run `indexnow:install` before generating a key.

### Environments

The key verification route is only available in `production` and `local` environments. In all other environments (e.g. `staging`), the route returns a `404` response. This prevents non-production deployments from exposing your IndexNow key without any extra configuration.

### Middleware

Apply middleware to the key verification route via `middleware()`:

```php
$config->middleware(['throttle:60,1']);
```

### Domain constraints

Restrict configuration to a specific domain or subdomain. This is useful in monorepo setups where multiple apps share the same Laravel installation but each needs its own IndexNow config:

```php
// App\Providers\MarketingIndexNowServiceProvider
$config
    ->domain('marketing.example.com')
    ->host('marketing.example.com')
    ->key('marketing-key-1234')
;

// App\Providers\IndexNowServiceProvider — catch-all for all other domains
$config
    ->host('www.example.com')
    ->key('abcd1234')
;
```

Register each as a separate provider in `bootstrap/providers.php`.

If `domain()` is not called, the config acts as a catch-all and matches any host. This is the correct setup for single-app projects and also works as a fallback in monorepo setups alongside domain-specific providers.

## Generating a key

Generate a valid IndexNow API key from the command line:

```bash
php artisan indexnow:generate-key
```

By default this outputs a 32-character lowercase hex key. Use `--length` to customize the length (8–128):

```bash
php artisan indexnow:generate-key --length=64
```

Copy the output and set it in your `IndexNowServiceProvider`:

```php
$config->key('your-generated-key');
```

## Submitting URLs

Inject `IndexNowClientManager` to build an `IndexNowClient` from your configuration and submit URLs:

```php
use Seo\IndexNow\Laravel\IndexNowClientManager;

public function __construct(private IndexNowClientManager $indexNow) {}

// Single URL
$this->indexNow->client()->submit('https://www.example.com/new-article');

// Multiple URLs
$this->indexNow->client()->submit([
    'https://www.example.com/new-article',
    'https://www.example.com/updated-page',
]);
```

Pass a domain to resolve a domain-specific config from the registry:

```php
$this->indexNow->client('marketing.example.com')->submit($url);
```

See the [core IndexNow package](/packages/indexnow/) for details on endpoints, key file locations, and the underlying client API.

## Next Steps

- [IndexNow](/packages/indexnow/) — core client API, endpoints, and URL submission
- [SEO for Laravel](/packages/seo-laravel) — install all seophp Laravel integrations at once
