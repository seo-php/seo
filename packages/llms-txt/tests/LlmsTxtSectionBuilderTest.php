<?php

declare(strict_types=1);

use Seo\LlmsTxt\LlmsTxtSection;
use Seo\LlmsTxt\LlmsTxtSectionBuilder;
use Seo\LlmsTxt\LlmsTxtSectionLink;

it('should build a section with a single link', function (): void {
    $section = (new LlmsTxtSectionBuilder())
        ->title('Documentation')
        ->link('Getting Started', 'https://example.com/docs')
        ->build()
    ;

    expect($section)->toEqual(LlmsTxtSection::make(
        title: 'Documentation',
        links: [
            LlmsTxtSectionLink::make('Getting Started', 'https://example.com/docs'),
        ],
    ));
});

it('should build a section with multiple links', function (): void {
    $section = (new LlmsTxtSectionBuilder())
        ->title('Documentation')
        ->link('Getting Started', 'https://example.com/docs', 'Quick start guide')
        ->link('API Reference', 'https://example.com/api')
        ->build()
    ;

    expect($section)->toEqual(LlmsTxtSection::make(
        title: 'Documentation',
        links: [
            LlmsTxtSectionLink::make('Getting Started', 'https://example.com/docs', 'Quick start guide'),
            LlmsTxtSectionLink::make('API Reference', 'https://example.com/api'),
        ],
    ));
});

it('should build a section with no links', function (): void {
    $section = (new LlmsTxtSectionBuilder())
        ->title('Empty Section')
        ->build()
    ;

    expect($section)->toEqual(LlmsTxtSection::make(
        title: 'Empty Section',
        links: [],
    ));
});
