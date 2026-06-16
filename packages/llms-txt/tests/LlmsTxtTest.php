<?php

declare(strict_types=1);

use Seo\LlmsTxt\LlmsTxt;
use Seo\LlmsTxt\LlmsTxtSection;
use Seo\LlmsTxt\LlmsTxtSectionLink;

it('should make a document with title only', function (): void {
    $llms = LlmsTxt::make(title: 'My Site');

    expect($llms)->toEqual(LlmsTxt::make(
        title: 'My Site',
        description: null,
        details: null,
        sections: [],
    ));
});

it('should make a document with description and details', function (): void {
    $llms = LlmsTxt::make(
        title: 'My Site',
        description: 'A brief description.',
        details: 'Additional context.',
    );

    expect($llms->title)->toBe('My Site')
        ->and($llms->description)->toBe('A brief description.')
        ->and($llms->details)->toBe('Additional context.')
        ->and($llms->sections)->toBe([]);
});

it('should make a document with sections', function (): void {
    $section = LlmsTxtSection::make(
        title: 'Documentation',
        links: [
            LlmsTxtSectionLink::make('Getting Started', 'https://example.com/docs'),
        ],
    );

    $llms = LlmsTxt::make(
        title: 'My Site',
        sections: [$section],
    );

    expect($llms->sections)->toEqual([$section]);
});

it('should expose public properties on the document', function (): void {
    $llms = LlmsTxt::make(
        title: 'My Site',
        description: 'Description',
        details: 'Details',
        sections: [],
    );

    expect($llms)
        ->title->toBe('My Site')
        ->description->toBe('Description')
        ->details->toBe('Details')
        ->sections->toBe([]);
});
