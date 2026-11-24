<?php

declare(strict_types=1);

use Seo\Head\Head;
use Seo\SchemaOrg\Graph;
use Seo\SchemaOrg\Head\Plugins\SchemaOrgPlugin;
use Seo\SchemaOrg\Types\Organization;

it('renders graph json-ld through head', function (): void {
    $graph = new Graph();
    $graph->add(
        Organization::make()
            ->id('https://example.com/#organization')
            ->name('Example Inc.'),
    );

    $head = Head::create(plugins: [
        SchemaOrgPlugin::make($graph),
    ]);

    $headTags = $head->render()['headTags'];

    expect($headTags)
        ->toContain('type="application/ld+json"')
        ->toContain('Example Inc.')
        ->toContain('https://example.com/#organization')
    ;
});

it('escapes markup inside the json-ld without losing data', function (): void {
    $graph = new Graph();
    $graph->add(
        Organization::make()
            ->name('A <b>bold</b> co</script><script>alert(1)</script>'),
    );

    $head = Head::create(plugins: [
        SchemaOrgPlugin::make($graph),
    ]);

    $headTags = $head->render()['headTags'];

    preg_match('~<script type="application/ld\\+json">(.*?)</script>~s', $headTags, $matches);

    expect($headTags)->not->toContain('<script>alert(1)')
        ->and($matches[1] ?? '')->not->toContain('<')
        ->and(json_decode($matches[1] ?? '', true))
        ->toBe(json_decode((string) json_encode($graph), true))
    ;
});
