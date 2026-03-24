<?php

declare(strict_types=1);

namespace Seo\LlmsTxt;

final readonly class LlmsTxt
{
    /**
     * @param array<LlmsTxtSection> $sections
     */
    private function __construct(
        public string $title,
        public ?string $description,
        public ?string $details,
        public array $sections,
    ) {}

    /**
     * @param array<LlmsTxtSection> $sections
     */
    public static function make(
        string $title,
        ?string $description = null,
        ?string $details = null,
        array $sections = [],
    ): self {
        return new self(
            $title,
            $description,
            $details,
            $sections,
        );
    }
}
