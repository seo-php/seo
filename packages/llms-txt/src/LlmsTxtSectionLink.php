<?php

declare(strict_types=1);

namespace Seo\LlmsTxt;

final readonly class LlmsTxtSectionLink
{
    private function __construct(
        public string $title,
        public string $url,
        public ?string $details,
    ) {}

    public static function make(
        string $title,
        string $url,
        ?string $details = null,
    ): self {
        return new self($title, $url, $details);
    }
}
