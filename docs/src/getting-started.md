---
title: Getting Started
description: Learn how to install and use the seophp SEO toolkit for PHP.
outline: deep
---

# Getting Started

**seophp** is a collection of PHP packages for common SEO tasks. Each package is framework-agnostic at its core, with optional first-class Laravel integrations.

## Package Architecture

The monorepo is structured around **feature areas**, each with two packages:

| Core package | Laravel integration |
|---|---|
| `seophp/head` | `seophp/head-laravel` |
| `seophp/robots` | `seophp/robots-laravel` |
| `seophp/llms-txt` | `seophp/llms-txt-laravel` |
| `seophp/schema-org` | `seophp/schema-org-laravel` |
| `seophp/indexnow` | `seophp/indexnow-laravel` |

The **core packages** have no framework dependencies and can be used with any PHP 8.4+ project. The **Laravel packages** add service providers, Artisan commands, and route registration on top of the core packages, and require Laravel 12+.

## Installation

### Laravel: install everything at once

If you're using Laravel, install the meta-package to get all integrations in a single step:

```bash
composer require seophp/seo-laravel
```

This pulls in `head-laravel`, `robots-laravel`, `llms-txt-laravel`, `indexnow-laravel`, and `schema-org-laravel`. Then run each package's install command to scaffold your service providers:

```bash
php artisan head:install
php artisan indexnow:install
php artisan robots:install
php artisan llms-txt:install
php artisan schema-org:install
```

See [SEO for Laravel](/packages/seo-laravel) for details.

### Framework-agnostic: install individual packages

Install only the packages you need:

```bash
# robots.txt management
composer require seophp/robots

# llms.txt management
composer require seophp/llms-txt

# HTML head tag management
composer require seophp/head

# Schema.org JSON-LD generation
composer require seophp/schema-org

# IndexNow URL submissions
composer require seophp/indexnow
```

## Requirements

- PHP 8.4 or higher
- Laravel 12 or higher _(Laravel packages only)_

## Packages

- [Head](/packages/head/) — manage and render HTML `<head>` tags
- [Robots](/packages/robots/) — build, render, and parse `robots.txt` files
- [LLMS.txt](/packages/llms-txt/) — manage `llms.txt` files
- [Schema.org](/packages/schema-org/) — generate JSON-LD structured data
- [Schema.org for Laravel](/packages/schema-org/laravel) — JSON-LD via Head integration
- [IndexNow](/packages/indexnow/) — submit URLs to search engines
- [IndexNow for Laravel](/packages/indexnow/laravel) — verification key route and URL submissions
- [SEO for Laravel](/packages/seo-laravel) — Laravel meta-package
