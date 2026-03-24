<?php

declare(strict_types=1);

namespace Seo\SchemaOrg\Head\Plugins;

use Seo\Head\Context\TagsResolvingContext;
use Seo\Head\Head;
use Seo\Head\HeadPlugin;
use Seo\Head\HeadTag;
use Seo\Head\HeadTagPosition;
use Seo\SchemaOrg\Graph;

final readonly class SchemaOrgPlugin implements HeadPlugin
{
    private function __construct(private Graph $graph) {}

    public static function make(Graph $graph): self
    {
        return new self($graph);
    }

    public function initialize(Head $head): void
    {
        $head->onTagsResolving(function (TagsResolvingContext $context): void {
            $content = json_encode([
                '@context' => 'https://schema.org',
                '@graph' => $this->graph->toArray(),
            ], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);

            $context->tags->add(new HeadTag(
                type: 'script',
                attributes: [
                    'type' => 'application/ld+json',
                ],
                textContent: $content ?: '',
                position: HeadTagPosition::Head,
            ));
        });
    }
}
