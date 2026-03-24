<?php

declare(strict_types=1);

namespace Seo\SchemaOrg\Generator;

final readonly class PropertyParser
{
    public function __invoke(Definition $definition): Property
    {
        return new Property(
            id: $definition->id(),
            name: $definition->label(),
            description: $definition->comment(),
            typeIds: $definition->domainIncludes(),
            phpTypes: $this->parsePhpTypes($definition),
        );
    }

    /**
     * @return list<string>
     */
    private function parsePhpTypes(Definition $definition): array
    {
        $types = [];
        foreach ($definition->rangeIncludes() as $range) {
            $types = array_merge($types, match ($range) {
                'schema:Boolean' => ['bool'],
                'schema:False' => ['false'],
                'schema:True' => ['true'],
                'schema:Date', 'schema:Time', 'schema:DateTime' => ['DateTimeInterface'],
                'schema:Text', 'schema:URL' => ['string'],
                'schema:Number' => ['float', 'int'],
                'schema:Float' => ['float'],
                'schema:Integer' => ['int'],
                default => [$this->mapClassName(str_replace('schema:', '', $range))],
            });
        }

        $types = array_unique($types);

        sort($types, SORT_STRING | SORT_FLAG_CASE);

        return $types;
    }

    private function mapClassName(string $className): string
    {
        $map = [
            'Class' => 'Class_',
            'Float' => 'Float_',
            '3DModel' => 'ThreeDimensionalModel',
        ];

        return $map[$className] ?? $className;
    }
}
