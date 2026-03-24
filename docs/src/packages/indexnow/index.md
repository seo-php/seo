---
title: IndexNow
description: Lightweight, framework-agnostic IndexNow URL submission for PHP.
outline: deep
---

# IndexNow

Lightweight, framework-agnostic `IndexNow` client for PHP. Submit URLs to participating search engines instantly via the [IndexNow](https://www.indexnow.org/) protocol.

## Requirements

- PHP 8.4 or higher

## Installation

Install via [Composer](https://getcomposer.org):

```bash
composer require seophp/indexnow
```

## Usage

### Creating a client

```php
use Seo\IndexNow\IndexNowClient;

$client = IndexNowClient::create(
    host: 'www.example.com',
    key: 'your-api-key',
);
```

::: info API key
The `key` must be a string of 8–128 characters containing only letters (`a-z`, `A-Z`), digits (`0-9`), and dashes (`-`). You generate this key yourself and host a text file at `https://www.example.com/{your-key}.txt` containing the key so search engines can verify ownership.
:::

### Specifying a custom key file location

If you host the key file somewhere other than the root of your site, pass its URL as `keyLocation`:

```php
$client = IndexNowClient::create(
    host: 'www.example.com',
    key: 'your-api-key',
    keyLocation: 'https://www.example.com/seo/my-key-file.txt',
);
```

### Choosing a search engine endpoint

By default, submissions go to the global IndexNow API (`https://api.indexnow.org/indexnow`), which forwards your URLs to all participating search engines. You can target a specific engine instead using the `Endpoint` enum:

```php
use Seo\IndexNow\Endpoint;
use Seo\IndexNow\IndexNowClient;

$client = IndexNowClient::create(
    host: 'www.example.com',
    key: 'your-api-key',
    endpoint: Endpoint::Bing,
);
```

| Enum case | Search engine | URL |
|---|---|---|
| `Endpoint::Global` | IndexNow global endpoint | `https://api.indexnow.org/indexnow` |
| `Endpoint::Bing` | Bing | `https://www.bing.com/indexnow` |
| `Endpoint::Yandex` | Yandex | `https://yandex.com/indexnow` |
| `Endpoint::Naver` | Naver | `https://searchadvisor.naver.com/indexnow` |
| `Endpoint::Seznam` | Seznam.cz | `https://search.seznam.cz/indexnow` |
| `Endpoint::Yep` | Yep | `https://indexnow.yep.com/indexnow` |
| `Endpoint::Amazon` | Amazon | `https://indexnow.amazonbot.amazon/indexnow` |

### Submitting URLs

```php
// Single URL
$client->submit('https://www.example.com/new-article');

// Multiple URLs
$client->submit([
    'https://www.example.com/new-article',
    'https://www.example.com/updated-page',
    'https://www.example.com/deleted-page',
]);
```

## Next Steps

- [Laravel Integration](/packages/indexnow/laravel) — submit URLs from within a Laravel application
