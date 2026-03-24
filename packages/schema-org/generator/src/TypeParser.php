<?php

declare(strict_types=1);

namespace Seo\SchemaOrg\Generator;

final readonly class TypeParser
{
    public function __invoke(Definition $definition): Type
    {
        return new Type(
            id: $definition->id(),
            name: $definition->label(),
            className: $this->mapClassName($definition->label()),
            description: $definition->comment(),
            parents: $definition->subclassOf(),
        );
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
