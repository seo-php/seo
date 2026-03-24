<?php

declare(strict_types=1);

namespace Seo\SchemaOrg;

use JsonSerializable;

final readonly class IdReference implements JsonSerializable
{
    private function __construct(public string $value) {}

    public static function make(string $value): self
    {
        return new self($value);
    }

    /**
     * @return array<string, mixed>
     */
    public function jsonSerialize(): array
    {
        return [
            '@id' => $this->value,
        ];
    }
}
