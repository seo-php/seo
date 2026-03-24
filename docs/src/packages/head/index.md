---
title: Head
description: PHP library for managing and rendering HTML head tags.
outline: deep
---

# Head

PHP library for managing and rendering HTML `<head>` tags in a flexible and extensible way. Supports titles, meta tags, links, scripts, styles, Open Graph, Twitter Cards, and more — with automatic deduplication, sorting, and a plugin system.

## Requirements

- PHP 8.4 or higher

## Installation

Install via [Composer](https://getcomposer.org):

```bash
composer require seophp/head
```

## Usage

### Creating a Head instance

Use the static `create` factory method:

```php
use Seo\Head\Head;

$head = Head::create();
```

### HTML and body attributes

Set attributes on the `<html>` and `<body>` elements:

```php
$head->html(lang: 'en', class: 'no-js');
$head->body(class: 'min-h-screen bg-white antialiased');
```

Class and style attributes are merged by default. Pass `replace: true` to overwrite instead:

```php
$head->html(class: 'dark', replace: true);
```

### Title

```php
$head->title('My Page Title');
```

### Meta tags

```php
$head->meta(charset: 'utf-8');
$head->meta(name: 'viewport', content: 'width=device-width, initial-scale=1.0');
$head->meta(name: 'description', content: 'A description of the page.');
$head->meta(property: 'og:title', content: 'My Page Title');
```

### Links

```php
$head->link(rel: 'stylesheet', href: '/css/app.css');
$head->link(rel: 'icon', href: '/favicon.ico', type: 'image/x-icon');
$head->link(rel: 'preconnect', href: 'https://fonts.googleapis.com');
```

### Scripts

```php
// External script
$head->script(src: '/js/app.js', defer: true);

// Inline script
$head->script(textContent: 'console.log("Hello")');

// Async script
$head->script(src: '/js/analytics.js', async: true);
```

### Styles

```php
$head->style(textContent: 'body { margin: 0; }');
```

### Noscript

```php
$head->noscript(textContent: '<style>.js-only { display: none; }</style>');
```

### Tag positioning

By default, tags are placed in the `<head>` section. You can place them after the `<body>` opening tag or before the `</body>` closing tag using `HeadTagPosition`:

```php
use Seo\Head\HeadTagPosition;

$head->script(src: '/js/app.js', tagPosition: HeadTagPosition::BodyClose);
$head->noscript(textContent: '...', tagPosition: HeadTagPosition::BodyOpen);
```

### Conditional tags

Use `when()` to conditionally add tags:

```php
$head->when($user->isAdmin(), function (Head $head) {
    $head->script(src: '/js/admin.js', defer: true);
});
```

### Rendering

Call `render()` to get the rendered output. It returns an array with five keys:

```php
$output = $head->render();

// $output['htmlAttrs']    → 'lang="en" class="no-js"'
// $output['bodyAttrs']    → 'class="min-h-screen bg-white antialiased"'
// $output['headTags']     → '<title>My Page Title</title>\n<meta charset="utf-8">...'
// $output['bodyOpenTags'] → ''
// $output['bodyCloseTags'] → '<script src="/js/app.js" defer></script>'
```

Pass `omitLineBreaks: true` to render all tags on a single line:

```php
$output = $head->render(omitLineBreaks: true);
```

## SeoMeta

`SeoMeta` provides a fluent API for common SEO and social media meta tags. Instead of manually building meta tags, you can use named methods:

```php
use Seo\Head\SeoMeta;

$seo = SeoMeta::for($head);

$seo->title('My Page Title')
    ->description('A description of the page.')
    ->canonical('https://example.com/my-page');
```

### Open Graph

```php
$seo->ogTitle('My Page Title')
    ->ogDescription('A description of the page.')
    ->ogImage('https://example.com/image.jpg', alt: 'My image', width: '1200', height: '630')
    ->ogType('article')
    ->ogUrl('https://example.com/my-page')
    ->ogSiteName('My Site');
```

### Twitter Cards

```php
$seo->twitterCard('summary_large_image')
    ->twitterTitle('My Page Title')
    ->twitterDescription('A description of the page.')
    ->twitterImage('https://example.com/image.jpg', alt: 'My image')
    ->twitterSite('@mysite')
    ->twitterCreator('@author');
```

### Article meta

```php
$seo->articleAuthor('John Doe')
    ->articlePublishedTime('2025-01-01T00:00:00Z')
    ->articleModifiedTime('2025-06-15T12:00:00Z')
    ->articleSection('Technology')
    ->articleTag('PHP');
```

### Robots

```php
$seo->robots(index: true, follow: true, maxSnippet: 160);
```

### Other tags

`SeoMeta` supports many more tags out of the box, including:

- `viewport()`, `charset()`, `themeColor()`
- `googleSiteVerification()`, `googlebot()`
- `ogAudio()`, `ogVideo()`, `ogLocale()`
- `fbAppId()`
- `appleMobileWebAppTitle()`, `appleMobileWebAppCapable()`
- `msapplicationConfig()`, `msapplicationTileColor()`
- `contentSecurityPolicy()`
- `profileFirstName()`, `profileLastName()`
- `bookAuthor()`, `bookIsbn()`

## SafeHead

`SafeHead` is a restricted wrapper around `Head` that exposes only safe tag methods — excluding potentially dangerous attributes like `id`, event handlers, and `nonce`. Useful when allowing user-generated or third-party code to add tags:

```php
use Seo\Head\SafeHead;

$safe = SafeHead::for($head);

$safe->title('Page Title');
$safe->meta(name: 'description', content: 'Safe description');
$safe->link(rel: 'stylesheet', href: '/css/theme.css');
```

## Plugins

Plugins extend `Head` by hooking into its lifecycle. A plugin implements the `HeadPlugin` interface:

```php
use Seo\Head\Head;
use Seo\Head\HeadPlugin;

final readonly class MyPlugin implements HeadPlugin
{
    public function initialize(Head $head): void
    {
        // Register lifecycle hooks here
    }
}
```

Register plugins when creating the `Head` instance:

```php
$head = Head::create(plugins: [
    TitleTemplatePlugin::make(fn (string $title) => "{$title} | My Site"),
    InferSeoMetaPlugin::make(),
    CanonicalPlugin::make(fn () => 'https://example.com' . request()->getPathInfo()),
]);
```

### Built-in plugins

#### TitleTemplatePlugin

Applies a template to the title tag. Useful for appending a site name:

```php
use Seo\Head\Plugins\TitleTemplatePlugin;

$head->plugin(TitleTemplatePlugin::make(
    fn (string $title) => "{$title} | My Site",
));

$head->title('About');
// Renders: <title>About | My Site</title>
```

#### InferSeoMetaPlugin

Automatically generates Open Graph and Twitter meta tags from the title and description:

```php
use Seo\Head\Plugins\InferSeoMetaPlugin;

$head->plugin(InferSeoMetaPlugin::make());

$head->title('My Page');
// Also generates: <meta name="og:title" content="My Page">
//                 <meta name="twitter:title" content="My Page">
```

You can customize the inferred values or disable specific inferences:

```php
InferSeoMetaPlugin::make(
    ogTitle: fn (string $title) => "OG: {$title}",
    twitterTitle: false, // disable twitter title inference
);
```

#### CanonicalPlugin

Adds a canonical link tag using a URL resolver closure:

```php
use Seo\Head\Plugins\CanonicalPlugin;

$head->plugin(CanonicalPlugin::make(
    fn () => 'https://example.com/current-page',
));
// Renders: <link rel="canonical" href="https://example.com/current-page">
```

## Lifecycle hooks

`Head` exposes lifecycle hooks for advanced customization:

| Hook | When it fires |
|---|---|
| `onTitleAdded` | When `title()` is called |
| `onTagAdded` | When any tag is added |
| `onTagsResolving` | Before deduplication and sorting |
| `onTagsResolved` | After deduplication and sorting |
| `onRendering` | Before final HTML rendering |
| `onRendered` | After rendering is complete |

```php
$head->onTitleAdded(function (TitleAddedContext $context) {
    // $context->head, $context->value
});

$head->onTagsResolving(function (TagsResolvingContext $context) {
    // $context->tags — modify tags before deduplication
});
```

## Tag deduplication

Tags are automatically deduplicated when rendered. The last tag added wins. Deduplication keys are determined by:

- **Unique types** (`base`, `title`) — only one allowed
- **Canonical links** — deduplicated by `rel="canonical"`
- **Charset meta** — deduplicated by `charset` attribute
- **Other meta tags** — deduplicated by `name` or `property` attribute
- **Tags with `id`** — deduplicated by tag type + id

## Tag sorting

Tags are automatically sorted by priority when rendered. The default ordering prioritizes:

1. `<base>` and CSP meta tags
2. Charset meta
3. Viewport meta
4. `<title>`
5. Preconnect links
6. Async scripts
7. Synchronous scripts and styles
8. Preload/modulepreload links
9. Deferred scripts and modules
10. Prefetch, DNS-prefetch, and prerender links

## Next Steps

- [Laravel Integration](/packages/head/laravel) — use Head with automatic Vite and Livewire support in Laravel
