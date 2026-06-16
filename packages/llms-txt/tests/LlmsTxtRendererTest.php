<?php

declare(strict_types=1);

use Seo\LlmsTxt\LlmsTxt;
use Seo\LlmsTxt\LlmsTxtRenderer;
use Seo\LlmsTxt\LlmsTxtSection;
use Seo\LlmsTxt\LlmsTxtSectionLink;

it('should render a document with title only', function (): void {
    $renderer = new LlmsTxtRenderer();

    $llms = LlmsTxt::make(title: 'My Site');

    expect($renderer->render($llms))->toEqual('# My Site');
});

it('should render a document with description', function (): void {
    $renderer = new LlmsTxtRenderer();

    $llms = LlmsTxt::make(
        title: 'My Site',
        description: 'A brief description of the site.',
    );

    expect($renderer->render($llms))->toEqual(<<<'TXT'
# My Site

> A brief description of the site.
TXT);
});

it('should render a document with description and details', function (): void {
    $renderer = new LlmsTxtRenderer();

    $llms = LlmsTxt::make(
        title: 'My Site',
        description: 'A brief description of the site.',
        details: 'Additional context for language models.',
    );

    expect($renderer->render($llms))->toEqual(<<<'TXT'
# My Site

> A brief description of the site.

Additional context for language models.
TXT);
});

it('should render a section with links', function (): void {
    $renderer = new LlmsTxtRenderer();

    $llms = LlmsTxt::make(
        title: 'My Site',
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

    expect($renderer->render($llms))->toEqual(<<<'TXT'
# My Site

## Documentation

- [Getting Started](https://example.com/docs/getting-started): Quick start guide
- [API Reference](https://example.com/docs/api)
TXT);
});

it('should render multiple sections', function (): void {
    $renderer = new LlmsTxtRenderer();

    $llms = LlmsTxt::make(
        title: 'My Site',
        sections: [
            LlmsTxtSection::make(
                title: 'Documentation',
                links: [
                    LlmsTxtSectionLink::make('Getting Started', 'https://example.com/docs'),
                ],
            ),
            LlmsTxtSection::make(
                title: 'Resources',
                links: [
                    LlmsTxtSectionLink::make('GitHub', 'https://github.com/example/repo'),
                    LlmsTxtSectionLink::make('Blog', 'https://example.com/blog'),
                ],
            ),
        ],
    );

    expect($renderer->render($llms))->toEqual(<<<'TXT'
# My Site

## Documentation

- [Getting Started](https://example.com/docs)

## Resources

- [GitHub](https://github.com/example/repo)
- [Blog](https://example.com/blog)
TXT);
});

it('should render a complete document', function (): void {
    $renderer = new LlmsTxtRenderer();

    $llms = LlmsTxt::make(
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
            LlmsTxtSection::make(
                title: 'Resources',
                links: [
                    LlmsTxtSectionLink::make('GitHub', 'https://github.com/example/repo'),
                    LlmsTxtSectionLink::make('Blog', 'https://example.com/blog'),
                ],
            ),
        ],
    );

    expect($renderer->render($llms))->toEqual(<<<'TXT'
# My Site

> A brief description of the site.

Additional context for language models.

## Documentation

- [Getting Started](https://example.com/docs/getting-started): Quick start guide
- [API Reference](https://example.com/docs/api)

## Resources

- [GitHub](https://github.com/example/repo)
- [Blog](https://example.com/blog)
TXT);
});

it('should render a section with no links', function (): void {
    $renderer = new LlmsTxtRenderer();

    $llms = LlmsTxt::make(
        title: 'My Site',
        sections: [
            LlmsTxtSection::make(title: 'Empty Section', links: []),
        ],
    );

    expect($renderer->render($llms))->toEqual(<<<'TXT'
# My Site

## Empty Section
TXT);
});

it('should render a link without details', function (): void {
    $renderer = new LlmsTxtRenderer();

    $llms = LlmsTxt::make(
        title: 'My Site',
        sections: [
            LlmsTxtSection::make(
                title: 'Resources',
                links: [
                    LlmsTxtSectionLink::make('GitHub', 'https://github.com/example/repo'),
                ],
            ),
        ],
    );

    expect($renderer->render($llms))->toEqual(<<<'TXT'
# My Site

## Resources

- [GitHub](https://github.com/example/repo)
TXT);
});
