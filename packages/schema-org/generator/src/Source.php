<?php

declare(strict_types=1);

namespace Seo\SchemaOrg\Generator;

use RuntimeException;

/**
 * @phpstan-type SourceDataItem array{
 *  '@id': string,
 *  '@type': string,
 *  'rdfs:comment': array{'@language': string, '@value': string}|string,
 *  'rdfs:label': array{'@language': string, '@value': string}|string,
 *  'rdfs:subClassOf': array{'@id': string}|list<array{'@id': string}>|null,
 *  'schema:domainIncludes': array{'@id': string}|list<array{'@id': string}>|null,
 *  'schema:isPartOf': array{'@id': string}|list<array{'@id': string}>|null,
 *  'schema:rangeIncludes': array{'@id': string}|list<array{'@id': string}>|null,
 *  'schema:source': array{'@id': string}|list<array{'@id': string}>|null
 * }
 */
final readonly class Source
{
    private const string URL = 'https://raw.githubusercontent.com/schemaorg/schemaorg/main/data/releases/29.3/schemaorg-all-https.jsonld';

    /**
     * @param list<SourceDataItem> $data
     */
    private function __construct(private array $data) {}

    public static function load(): self
    {
        $contents = file_get_contents(self::URL);
        if ($contents === false) {
            throw new RuntimeException('Failed to load source data');
        }

        /** @var array{'@graph': list<SourceDataItem>} */
        $data = json_decode($contents, associative: true);

        return new self($data['@graph']);
    }

    /**
     * @return list<Definition>
     */
    public function classes(): array
    {
        return array_map(
            fn (array $item) => new Definition($item),
            $this->filter('rdfs:Class'),
        );
    }

    /**
     * @return list<Definition>
     */
    public function properties(): array
    {
        return array_map(
            fn (array $item) => new Definition($item),
            $this->filter('rdf:Property'),
        );
    }

    /**
     * @return list<SourceDataItem>
     */
    private function filter(string $type): array
    {
        return array_values(array_filter(
            $this->data,
            fn (array $item) => $item['@type'] === $type,
        ));
    }
}
