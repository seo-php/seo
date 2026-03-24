---
title: LLMS.txt
description: Lightweight, framework-agnostic llms.txt management for PHP.
outline: deep
---

# LLMS.txt

Lightweight, framework-agnostic `llms.txt` management for PHP. Build, render, and serve [llms.txt](https://llmstxt.org/) files to help AI assistants understand your site.

## Requirements

- PHP 8.4 or higher

## Installation

Install via [Composer](https://getcomposer.org):

```bash
composer require seophp/llms-txt
```

## Usage

You may create an instance of the main `LlmsTxt` class directly using the static factory:

```php
use Seo\LlmsTxt\LlmsTxt;
use Seo\LlmsTxt\LlmsTxtSection;
use Seo\LlmsTxt\LlmsTxtSectionLink;

$llmsTxt = LlmsTxt::make(
    title: 'My Site',
    description: 'A brief description of the site.',
    details: 'Additional context for language models.',
    sections: [
        LlmsTxtSection::make(
            title: 'Documentation',
            links: [
                LlmsTxtSectionLink::make('Getting Started', 'https://example.com/docs/getting-started', 'Quick start guide'),
                LlmsTxtSectionLink::make('API Reference', 'https://example.com/docs/api'),
            ],
        ),
    ],
);
```

### Using the builder

Use the `LlmsTxtBuilder` to construct a `LlmsTxt` instance with a fluent API:

```php
use Seo\LlmsTxt\LlmsTxtBuilder;
use Seo\LlmsTxt\LlmsTxtSectionBuilder;

$llmsTxt = (new LlmsTxtBuilder())
    ->title('My Site')
    ->description('A brief description of the site.')
    ->details('Additional context for language models.')
    ->section(fn (LlmsTxtSectionBuilder $section) => $section
        ->title('Documentation')
        ->link('Getting Started', 'https://example.com/docs/getting-started', 'Quick start guide')
        ->link('API Reference', 'https://example.com/docs/api')
    )
    ->section(fn (LlmsTxtSectionBuilder $section) => $section
        ->title('Resources')
        ->link('GitHub', 'https://github.com/example/repo')
        ->link('Blog', 'https://example.com/blog')
    )
    ->build();
```

### Rendering

Use the `LlmsTxtRenderer` to convert a `LlmsTxt` instance to a string:

```php
use Seo\LlmsTxt\LlmsTxtRenderer;

$renderer = new LlmsTxtRenderer();

$output = $renderer->render($llmsTxt);
```

Output:

```markdown
# My Site

> A brief description of the site.

Additional context for language models.

## Documentation

- [Getting Started](https://example.com/docs/getting-started): Quick start guide
- [API Reference](https://example.com/docs/api)

## Resources

- [GitHub](https://github.com/example/repo)
- [Blog](https://example.com/blog)
```

### Data model

The library uses three immutable data classes:

| Class | Description |
|---|---|
| `LlmsTxt` | Root document with title, optional description, optional details, and sections |
| `LlmsTxtSection` | A section with a title and an array of links |
| `LlmsTxtSectionLink` | A link with a title, URL, and optional details |

All data classes are `final readonly` and provide `::make()` static factory methods.

## Next Steps

- [Laravel Integration](/packages/llms-txt/laravel) — serve a dynamic `llms.txt` response in Laravel
