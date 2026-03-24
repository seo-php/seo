---
title: IndexNow for Laravel
description: Laravel integration for seophp/indexnow — submit URLs and serve verification keys in Laravel.
outline: deep
---

# IndexNow for Laravel

Laravel integration for [seophp/indexnow](/packages/indexnow/). Automatically serves the IndexNow verification key file and provides access to the IndexNow client for submitting URLs from within a Laravel application.

## Requirements

- PHP 8.4 or higher
- Laravel 12 or higher

## Installation

Install via [Composer](https://getcomposer.org):

```bash
composer require seophp/indexnow-laravel
```

The package is auto-discovered by Laravel — no manual provider registration needed.

## Key verification endpoint

The package automatically registers a route that serves the IndexNow verification key file. Search engines use this endpoint to verify that you own the site.

The key is deterministically generated from your application URL (`config('app.url')`), using a truncated SHA-256 hash:

```
GET https://yourapp.com/{key}.txt → returns the key as plain text
```

No configuration is needed — the key is derived automatically. Only requests with the correct key in the URL receive a `200` response; all others return `404`.

### How it works

1. The controller reads `config('app.url')` from your Laravel configuration
2. Generates the key: first 32 characters of `sha256(app.url)`
3. Compares the `{key}` URL parameter against the generated key
4. Returns the key as a `text/plain` response if it matches, or `404` if not

## Submitting URLs

Use the core [IndexNow client](/packages/indexnow/) to submit URLs. The key matches the one served by the verification endpoint:

```php
use Seo\IndexNow\IndexNowClient;

$url = config('app.url');
$key = substr(hash('sha256', $url), 0, 32);

$client = IndexNowClient::create(
    host: parse_url($url, PHP_URL_HOST),
    key: $key,
    keyLocation: $url . '/' . $key . '.txt',
);

$client->submit('https://yourapp.com/new-article');
$client->submit([
    'https://yourapp.com/updated-page',
    'https://yourapp.com/another-page',
]);
```

::: tip
Consider wrapping the client creation in a service provider or singleton binding for reuse across your application.
:::
