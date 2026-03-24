---
title: Robots
description: Lightweight, framework-agnostic robots.txt management for PHP.
outline: deep
---

# Robots

Lightweight, framework-agnostic `robots.txt` management for PHP.

## Requirements

- PHP 8.4 or higher

## Installation

Install via [Composer](https://getcomposer.org):

```bash
composer require seophp/robots
```

## Usage

You may create an instance of the main `RobotsTxt` class directly:

```php
use Seo\Robots\RobotsTxt;
use Seo\Robots\RobotsTxtGroup;
use Seo\Robots\RobotsTxtDirective;

$robots = new RobotsTxt(
    groups: [
        new RobotsTxtGroup(
            agents: ['*'],
            directives: [
                new RobotsTxtDirective('Disallow', '/admin'),
            ],
        ),
    ],
    sitemaps: [
        'https://example.com/sitemap.xml',
    ],
);
```

### Using the builder

Use the `RobotsTxtBuilder` to construct a `RobotsTxt` instance with a fluent API:

```php
use Seo\Robots\RobotsTxtBuilder;
use Seo\Robots\RobotsTxtGroupBuilder;

$robots = (new RobotsTxtBuilder())
    ->group(fn (RobotsTxtGroupBuilder $g) => $g
        ->agent('*')
        ->disallow('/admin')
        ->allow('/admin/public')
        ->crawlDelay(10)
    )
    ->group(fn (RobotsTxtGroupBuilder $g) => $g
        ->agent('Googlebot')
        ->agent('Bingbot')
        ->disallow('/')
    )
    ->sitemap('https://example.com/sitemap.xml')
    ->build();
```

### Rendering

Use the `RobotsTxtRenderer` to convert a `RobotsTxt` instance to a string:

```php
use Seo\Robots\RobotsTxtRenderer;

$renderer = new RobotsTxtRenderer();

$output = $renderer->render($robots);
```

Output:

```
User-agent: *
Disallow: /admin
Allow: /admin/public
Crawl-delay: 10

User-agent: Googlebot
User-agent: Bingbot
Disallow: /

Sitemap: https://example.com/sitemap.xml
```

### Parsing

Use the `RobotsTxtParser` to parse a robots.txt string into a `RobotsTxt` instance:

```php
use Seo\Robots\RobotsTxtParser;

$parser = new RobotsTxtParser();

$robots = $parser->parse($content);
```

::: info Parser behaviour
- Uses blank lines as group separators
- Preserves original directive casing
- Strips comments (`#` and everything after)
- Throws `RobotsTxtParseException` on malformed lines or directives without a preceding `User-agent`
:::

### Querying

The `RobotsTxt` instance provides methods to check crawling permissions following [RFC 9309](https://www.rfc-editor.org/rfc/rfc9309) semantics:

```php
$robots->isAllowed('Googlebot', '/public');    // true
$robots->isDisallowed('Googlebot', '/admin');  // true
$robots->crawlDelayFor('Googlebot');           // int or null
```

#### Matching rules

- **Agent resolution**: case-insensitive prefix matching. `"Googlebot-News"` matches a `"Googlebot"` group. The most specific (longest) matching agent wins, with `*` as fallback.
- **Path matching**: longest matching directive wins. Supports `*` (wildcard) and `$` (end anchor) in patterns.
- **Conflict resolution**: when `Allow` and `Disallow` patterns have equal length, `Allow` wins.
- **Default**: paths are allowed when no directive matches.

## Next Steps

- [Laravel Integration](/packages/robots/laravel) — serve a dynamic `robots.txt` response in Laravel
