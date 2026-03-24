<?php

declare(strict_types=1);

namespace Seo\SchemaOrg;

use JsonSerializable;

final class Graph implements JsonSerializable
{
    /**
     * @var array<Type>
     */
    public private(set) array $types = [];

    public function add(Type $type): self
    {
        $this->types[] = $type;

        return $this;
    }

    /**
     * @return array<array<string, mixed>>
     */
    public function toArray(): array
    {
        return array_map(fn (Type $type) => $type->toArray(), $this->types);
    }

    /**
     * @return array<array<string, mixed>>
     */
    public function jsonSerialize(): array
    {
        return $this->toArray();
    }
}
