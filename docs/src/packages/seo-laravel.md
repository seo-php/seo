---
title: SEO for Laravel
description: Meta-package that bundles all seophp Laravel integrations.
outline: deep
---

# SEO for Laravel

`seophp/seo-laravel` is a meta-package that installs all seophp Laravel integrations in a single step. It is the recommended starting point for new Laravel projects.

## Requirements

- PHP 8.4 or higher
- Laravel 12 or higher

## Installation

Install via [Composer](https://getcomposer.org):

```bash
composer require seophp/seo-laravel
```

This pulls in the following packages:

| Package | Description |
|---|---|
| [`seophp/head-laravel`](/packages/head/laravel) | Manage and render HTML `<head>` tags |
| [`seophp/robots-laravel`](/packages/robots/laravel) | Serve a dynamic `robots.txt` response |
| [`seophp/llms-txt-laravel`](/packages/llms-txt/laravel) | Serve a dynamic `llms.txt` response |
| [`seophp/indexnow-laravel`](/packages/indexnow/laravel) | Serve the IndexNow verification key and submit URLs |
| [`seophp/schema-org-laravel`](/packages/schema-org/laravel) | JSON-LD structured data via Head |

## Setup

Run the install command to scaffold all service providers at once:

```bash
php artisan seo:install
```

This presents an interactive menu where you select which packages to set up. For each selected package, it delegates to the package's own install command (`head:install`, `indexnow:install`, `robots:install`, `llms-txt:install`, `schema-org:install`).

### Install all at once

Skip the interactive menu and install everything:

```bash
php artisan seo:install --all
```

### Force overwrite

Overwrite existing provider files:

```bash
php artisan seo:install --force
```

Both flags can be combined:

```bash
php artisan seo:install --all --force
```

## What gets scaffolded

After running `seo:install`, the following service providers are created in `app/Providers/`:

| Provider | Manages |
|---|---|
| `HeadServiceProvider` | HTML head tags, Vite assets, Livewire assets |
| `IndexNowServiceProvider` | IndexNow verification key route and configuration |
| `RobotsTxtServiceProvider` | `robots.txt` route and configuration |
| `LlmsTxtServiceProvider` | `llms.txt` route and configuration |
| `SchemaOrgServiceProvider` | JSON-LD structured data graph |

Each provider is automatically registered in `bootstrap/providers.php`.

## Next Steps

- [Head for Laravel](/packages/head/laravel) — configure head tags, meta, and asset plugins
- [Robots for Laravel](/packages/robots/laravel) — configure `robots.txt` rules per environment and domain
- [LLMS.txt for Laravel](/packages/llms-txt/laravel) — configure `llms.txt` sections and links
- [IndexNow for Laravel](/packages/indexnow/laravel) — configure the verification key route and submit URLs
- [Schema.org for Laravel](/packages/schema-org/laravel) — configure site-wide and page-specific JSON-LD
