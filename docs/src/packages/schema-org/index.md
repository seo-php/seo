---
title: Schema.org
description: PHP library for generating JSON-LD structured data.
outline: deep
---

# Schema.org

Type-safe PHP library for generating [JSON-LD](https://json-ld.org/) structured data following the [Schema.org](https://schema.org/) vocabulary. Includes 1,800+ auto-generated type classes with fluent builder methods for every Schema.org property.

## Requirements

- PHP 8.4 or higher

## Installation

Install via [Composer](https://getcomposer.org):

```bash
composer require seophp/schema-org
```

## Usage

### Creating Schema.org types

Every Schema.org type is available as a PHP class under the `Seo\SchemaOrg\Types` namespace. Use the static `make()` factory method and chain property setters:

```php
use Seo\SchemaOrg\Types\Article;

$article = Article::make()
    ->headline('Understanding JSON-LD')
    ->datePublished(new DateTime('2025-01-15'))
    ->dateModified(new DateTime('2025-06-01'))
    ->author('Jane Doe')
    ->description('A guide to JSON-LD structured data.');
```

### Common types

| Class | Use case |
|---|---|
| `Article` | Blog posts, news articles |
| `Organization` | Company or organization info |
| `Person` | Author or person details |
| `Product` | E-commerce items |
| `WebPage` | Generic page metadata |
| `BreadcrumbList` | Navigation breadcrumbs |
| `Event` | Conferences, concerts, meetups |
| `FAQPage` | FAQ pages |
| `LocalBusiness` | Local business listings |
| `WebSite` | Site-level metadata with search action |

All types are in the `Seo\SchemaOrg\Types` namespace. The full list matches the [Schema.org type hierarchy](https://schema.org/docs/full.html).

### Nested types

Properties accept other Schema.org types for nested structures:

```php
use Seo\SchemaOrg\Types\Article;
use Seo\SchemaOrg\Types\Person;
use Seo\SchemaOrg\Types\Organization;

$article = Article::make()
    ->headline('Understanding JSON-LD')
    ->author(
        Person::make()
            ->name('Jane Doe')
            ->url('https://example.com/jane')
    )
    ->publisher(
        Organization::make()
            ->name('Example Inc.')
            ->url('https://example.com')
    );
```

### ID references

Use `IdReference` to link entities together within a graph by their `@id`, avoiding data duplication:

```php
use Seo\SchemaOrg\IdReference;
use Seo\SchemaOrg\Types\Organization;
use Seo\SchemaOrg\Types\Article;

$org = Organization::make()
    ->id('https://example.com/#organization')
    ->name('Example Inc.');

$article = Article::make()
    ->headline('Our Story')
    ->publisher(IdReference::make('https://example.com/#organization'));
```

### Using the Graph

The `Graph` class collects multiple types and renders them as a single JSON-LD `@graph` structure:

```php
use Seo\SchemaOrg\Graph;
use Seo\SchemaOrg\Types\Organization;
use Seo\SchemaOrg\Types\WebSite;
use Seo\SchemaOrg\Types\Article;

$graph = new Graph();

$graph->add(
    Organization::make()
        ->id('https://example.com/#organization')
        ->name('Example Inc.')
        ->url('https://example.com')
);

$graph->add(
    WebSite::make()
        ->id('https://example.com/#website')
        ->name('Example')
        ->url('https://example.com')
);

$graph->add(
    Article::make()
        ->headline('Hello World')
        ->author(IdReference::make('https://example.com/#organization'))
);
```

### Rendering JSON-LD

The `Graph` and individual `Type` classes implement `JsonSerializable`. Encode them with `json_encode()`:

```php
echo json_encode($graph, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES);
```

Output:

```json
{
    "@context": "https://schema.org",
    "@graph": [
        {
            "@type": "Organization",
            "@id": "https://example.com/#organization",
            "name": "Example Inc.",
            "url": "https://example.com"
        },
        {
            "@type": "WebSite",
            "@id": "https://example.com/#website",
            "name": "Example",
            "url": "https://example.com"
        },
        {
            "@type": "Article",
            "headline": "Hello World",
            "author": {
                "@id": "https://example.com/#organization"
            }
        }
    ]
}
```

### Rendering as a script tag

To render JSON-LD as an HTML `<script>` tag for embedding in a page:

```php
$json = json_encode($graph, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);
echo '<script type="application/ld+json">' . $json . '</script>';
```

::: tip Integration with Head
If you're using [seophp/head](/packages/head/), the `SchemaOrgPlugin` handles this automatically — see below.
:::

## Head integration

The package includes a `SchemaOrgPlugin` that integrates with [seophp/head](/packages/head/) to automatically render the JSON-LD `<script>` tag in the `<head>` section:

```php
use Seo\Head\Head;
use Seo\SchemaOrg\Graph;
use Seo\SchemaOrg\Head\Plugins\SchemaOrgPlugin;

$graph = new Graph();
$head = Head::create(plugins: [
    SchemaOrgPlugin::make($graph),
]);

// Add types to the graph at any point before rendering
$graph->add(Organization::make()->name('Example Inc.'));

// When $head->render() is called, the JSON-LD script tag is automatically included
```

### Laravel integration

In a Laravel application, register the `Graph` as a scoped singleton and wire it to the `Head` instance via the `SchemaOrgPlugin`:

```php
<?php

declare(strict_types=1);

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Seo\Head\Head;
use Seo\SchemaOrg\Graph;
use Seo\SchemaOrg\Head\Plugins\SchemaOrgPlugin;

final class SchemaOrgHeadServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->app->scopedIf(Graph::class, static fn () => new Graph());

        $this->app->afterResolving(Head::class, function (Head $head): void {
            $head->plugin(SchemaOrgPlugin::make($this->app->make(Graph::class)));
        });
    }
}
```

Then inject the `Graph` in your controllers or Livewire components to add types:

```php
use Seo\SchemaOrg\Graph;
use Seo\SchemaOrg\Types\Article;

final class ShowArticle extends Component
{
    public Article $article;

    public function render(): mixed
    {
        app(Graph::class)->add(
            \Seo\SchemaOrg\Types\Article::make()
                ->headline($this->article->title)
                ->datePublished($this->article->published_at)
        );

        return view('livewire.show-article');
    }
}
```

## Property inheritance

Schema.org types follow an inheritance hierarchy. For example, `Article` extends `CreativeWork`, which extends `Thing`. This means an `Article` instance has access to all properties from its parent types:

```php
Article::make()
    // From ThingProperties
    ->name('My Article')
    ->description('A description')
    // From CreativeWorkProperties
    ->author('Jane Doe')
    ->dateCreated(new DateTime())
    // From ArticleProperties
    ->headline('My Article')
    ->articleBody('The full text...');
```
