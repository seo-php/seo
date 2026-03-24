<?php

declare(strict_types=1);

namespace Seo\SchemaOrg\Generator;

/**
 * @phpstan-import-type SourceDataItem from Source
 */
final readonly class Definition
{
    /**
     * @param SourceDataItem $data
     */
    public function __construct(private array $data) {}

    public function id(): string
    {
        return $this->data['@id'];
    }

    public function label(): string
    {
        $label = $this->data['rdfs:label'];

        if (is_array($label)) {
            return $label['@value'];
        }

        return $label;
    }

    public function comment(): string
    {
        $comment = $this->data['rdfs:comment'];

        if (is_array($comment)) {
            return $comment['@value'];
        }

        return $comment;
    }

    /**
     * @return list<string>
     */
    public function domainIncludes(): array
    {
        $value = $this->data['schema:domainIncludes'] ?? [];

        /** @var list<array{'@id': string}> */
        $value = isset($value['@id']) ? [$value] : $value;

        return array_map(fn (array $domain) => $domain['@id'], $value);
    }

    /**
     * @return list<string>
     */
    public function rangeIncludes(): array
    {
        $value = $this->data['schema:rangeIncludes'] ?? [];

        /** @var list<array{'@id': string}> */
        $value = isset($value['@id']) ? [$value] : $value;

        return array_map(fn (array $range) => $range['@id'], $value);
    }

    /**
     * @return list<string>
     */
    public function subclassOf(): array
    {
        $value = $this->data['rdfs:subClassOf'] ?? [];

        /** @var list<array{'@id': string}> */
        $value = isset($value['@id']) ? [$value] : $value;

        return array_map(fn (array $subClass) => $subClass['@id'], $value);
    }
}
