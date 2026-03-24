<?php

declare(strict_types=1);

namespace Seo\SchemaOrg;

use JsonSerializable;

abstract class Type implements JsonSerializable
{
    /**
     * @var array<string, mixed>
     */
    private array $properties = [];

    abstract protected function type(): string;

    final private function __construct() {}

    final public static function make(): static
    {
        return new static();
    }

    final protected function set(string $name, mixed $value): static
    {
        $this->properties[$name] = $value;

        return $this;
    }

    final public function id(string $value): static
    {
        return $this->set('@id', $value);
    }

    /**
     * @return array<string, mixed>
     */
    final public function toArray(): array
    {
        $properties = [
            '@type' => $this->type(),
        ];

        foreach ($this->properties as $name => $value) {
            if (is_array($value)) {
                $properties[$name] = array_map(fn (mixed $item) => $item instanceof Type ? $item->toArray() : $item, $value);
            } elseif ($value instanceof self) {
                $properties[$name] = $value->toArray();
            } elseif ($value instanceof IdReference) {
                $properties[$name] = ['@id' => $value->value];
            } else {
                $properties[$name] = $value;
            }
        }

        return [
            '@type' => $this->type(),
            ...$properties,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    final public function jsonSerialize(): array
    {
        return $this->toArray();
    }
}
