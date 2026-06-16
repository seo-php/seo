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
