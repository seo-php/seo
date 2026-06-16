<?php

declare(strict_types=1);

use Seo\SchemaOrg\Graph;
use Seo\SchemaOrg\IdReference;
use Seo\SchemaOrg\Types\Article;
use Seo\SchemaOrg\Types\Organization;

it('serializes nodes via toArray without json-ld envelope', function (): void {
    $graph = new Graph();
    $graph->add(
        Organization::make()
            ->id('https://example.com/#organization')
            ->name('Example Inc.'),
    );

    expect($graph->toArray())->toBe([
        [
            '@type' => 'Organization',
            '@id' => 'https://example.com/#organization',
            'name' => 'Example Inc.',
        ],
    ]);
});

it('serializes a json-ld graph document via jsonSerialize', function (): void {
    $graph = new Graph();
    $graph->add(
        Organization::make()
            ->id('https://example.com/#organization')
            ->name('Example Inc.'),
    );

    expect($graph->jsonSerialize())->toBe([
        '@context' => 'https://schema.org',
        '@graph' => [
            [
                '@type' => 'Organization',
                '@id' => 'https://example.com/#organization',
                'name' => 'Example Inc.',
            ],
        ],
    ]);
});

it('encodes a json-ld graph document with json_encode', function (): void {
    $graph = new Graph();
    $graph->add(
        Organization::make()
            ->id('https://example.com/#organization')
            ->name('Example Inc.'),
    );
    $graph->add(
        Article::make()
            ->headline('Hello World')
            ->author(IdReference::make('https://example.com/#organization')),
    );

    $json = json_encode($graph, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);

    expect($json)->toBeJson();
    expect(json_decode($json ?: '', true))->toBe([
        '@context' => 'https://schema.org',
        '@graph' => [
            [
                '@type' => 'Organization',
                '@id' => 'https://example.com/#organization',
                'name' => 'Example Inc.',
            ],
            [
                '@type' => 'Article',
                'headline' => 'Hello World',
                'author' => [
                    '@id' => 'https://example.com/#organization',
                ],
            ],
        ],
    ]);
});
