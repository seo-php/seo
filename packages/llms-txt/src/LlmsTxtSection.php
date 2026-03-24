<?php

declare(strict_types=1);

namespace Seo\LlmsTxt;

final readonly class LlmsTxtSection
{
    /**
     * @param array<LlmsTxtSectionLink> $links
     */
    private function __construct(public string $title, public array $links) {}

    /**
     * @param array<LlmsTxtSectionLink> $links
     */
    public static function make(string $title, array $links): self
    {
        return new self($title, $links);
    }
}
