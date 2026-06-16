<?php

declare(strict_types=1);

use Seo\LlmsTxt\LlmsTxt;
use Seo\LlmsTxt\LlmsTxtBuilder;
use Seo\LlmsTxt\LlmsTxtRenderer;
use Seo\LlmsTxt\LlmsTxtSection;
use Seo\LlmsTxt\LlmsTxtSectionBuilder;
use Seo\LlmsTxt\LlmsTxtSectionLink;

it('should build a document with title only', function (): void {
    $llms = (new LlmsTxtBuilder())
        ->title('My Site')
        ->build()
    ;

    expect($llms)->toEqual(LlmsTxt::make(
        title: 'My Site',
        description: null,
        details: null,
        sections: [],
    ));
});

it('should build a document with description and details', function (): void {
    $llms = (new LlmsTxtBuilder())
        ->title('My Site')
        ->description('A brief description of the site.')
        ->details('Additional context for language models.')
        ->build()
    ;

    expect($llms)->toEqual(LlmsTxt::make(
        title: 'My Site',
        description: 'A brief description of the site.',
        details: 'Additional context for language models.',
        sections: [],
    ));
});

it('should build a document with a single section', function (): void {
    $llms = (new LlmsTxtBuilder())
        ->title('My Site')
        ->section(
            fn (LlmsTxtSectionBuilder $section) => $section
                ->title('Documentation')
                ->link('Getting Started', 'https://example.com/docs/getting-started', 'Quick start guide')
                ->link('API Reference', 'https://example.com/docs/api'),
        )
        ->build()
    ;

    expect($llms)->toEqual(LlmsTxt::make(
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
    ));
});

it('should build a document with multiple sections', function (): void {
    $llms = (new LlmsTxtBuilder())
        ->title('My Site')
        ->section(
            fn (LlmsTxtSectionBuilder $section) => $section
                ->title('Documentation')
                ->link('Getting Started', 'https://example.com/docs'),
        )
        ->section(
            fn (LlmsTxtSectionBuilder $section) => $section
                ->title('Resources')
                ->link('GitHub', 'https://github.com/example/repo')
                ->link('Blog', 'https://example.com/blog'),
        )
        ->build()
    ;

    expect($llms)->toEqual(LlmsTxt::make(
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
    ));
});

it('should roundtrip: build then render produces expected output', function (): void {
    $renderer = new LlmsTxtRenderer();

    $llms = (new LlmsTxtBuilder())
        ->title('My Site')
        ->description('A brief description of the site.')
        ->details('Additional context for language models.')
        ->section(
            fn (LlmsTxtSectionBuilder $section) => $section
                ->title('Documentation')
                ->link('Getting Started', 'https://example.com/docs/getting-started', 'Quick start guide')
                ->link('API Reference', 'https://example.com/docs/api'),
        )
        ->section(
            fn (LlmsTxtSectionBuilder $section) => $section
                ->title('Resources')
                ->link('GitHub', 'https://github.com/example/repo')
                ->link('Blog', 'https://example.com/blog'),
        )
        ->build()
    ;

    $expected = LlmsTxt::make(
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

    expect($llms)->toEqual($expected);

    $rendered = $renderer->render($llms);

    expect($rendered)->toEqual(<<<'TXT'
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
