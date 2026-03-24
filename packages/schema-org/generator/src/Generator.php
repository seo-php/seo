<?php

declare(strict_types=1);

namespace Seo\SchemaOrg\Generator;

use DateTimeInterface;
use Nette\PhpGenerator\PhpFile;
use Nette\PhpGenerator\PsrPrinter;

final readonly class Generator
{
    public function generate(): void
    {
        $source = Source::load();

        /** @var list<Type> $types */
        $types = array_map(new TypeParser(), $source->classes());

        /** @var list<Property> $properties */
        $properties = array_map(new PropertyParser(), $source->properties());

        foreach ($types as $type) {
            $this->generatePropertiesFile($type, $properties, $types);
            $this->generateTypeFile($type, $properties, $types);
        }
    }

    /**
     * @param list<Property> $properties
     * @param list<Type> $types
     */
    private function generatePropertiesFile(Type $type, array $properties, array $types): void
    {
        $properties = array_filter($properties, fn (Property $property) => in_array($type->id, $property->typeIds));

        usort($properties, fn (Property $a, Property $b) => strcmp($a->name, $b->name));

        $file = new PhpFile();

        $file->setStrictTypes();

        $namespace = $file->addNamespace('Seo\\SchemaOrg\\Properties');

        $interface = $namespace->addInterface("{$type->className}Properties");

        foreach ($type->parents as $parent) {
            $parentType = array_find($types, fn (Type $type) => $type->id === $parent);
            if ($parentType === null) {
                continue;
            }

            $interface->addExtend("Seo\\SchemaOrg\\Properties\\{$parentType->className}Properties");
        }

        foreach ($properties as $property) {
            $method = $interface->addMethod($property->name);

            $method
                ->setPublic()
                ->setReturnType('static')
            ;

            $docblockTypes = [];
            $hasIdReference = false;
            foreach ($property->phpTypes as $phpType) {
                if (in_array($phpType, ['string', 'int', 'float', 'bool', 'true', 'false', 'DateTimeInterface'])) {
                    $docblockTypes[] = $phpType;
                    $docblockTypes[] = "{$phpType}[]";

                    if ($phpType === 'DateTimeInterface') {
                        $namespace->addUse(DateTimeInterface::class);
                    }
                } else {
                    $docblockTypes[] = "{$phpType}Properties";
                    $docblockTypes[] = "{$phpType}Properties[]";

                    $namespace->addUse("Seo\\SchemaOrg\\Properties\\{$phpType}Properties");

                    $hasIdReference = true;
                }
            }

            if ($hasIdReference) {
                $docblockTypes[] = 'IdReference';
                $docblockTypes[] = 'IdReference[]';
                $namespace->addUse(\Seo\SchemaOrg\IdReference::class);
            }

            $method->addComment('@param '.implode('|', $docblockTypes).' $value');

            $method->addParameter('value')->setType('mixed');
        }

        file_put_contents(__DIR__."/../../src/Properties/{$type->className}Properties.php", new PsrPrinter()->printFile($file));
    }

    /**
     * @param list<Property> $properties
     * @param list<Type> $types
     */
    private function generateTypeFile(Type $type, array $properties, array $types): void
    {
        $properties = $this->getPropertiesForType($type, $properties, $types);

        usort($properties, fn (Property $a, Property $b) => strcmp($a->name, $b->name));

        $file = new PhpFile();

        $file->setStrictTypes();

        $namespace = $file->addNamespace('Seo\\SchemaOrg\\Types');

        $namespace->addUse(\Seo\SchemaOrg\Type::class);
        $namespace->addUse("Seo\\SchemaOrg\\Properties\\{$type->className}Properties");

        $class = $namespace->addClass($type->className);

        $class
            ->setFinal()
            ->setExtends(\Seo\SchemaOrg\Type::class)
            ->addImplement("Seo\\SchemaOrg\\Properties\\{$type->className}Properties")
        ;

        $class->addMethod('type')
            ->setProtected()
            ->setReturnType('string')
            ->setBody("return '{$type->name}';")
        ;

        foreach ($properties as $property) {
            $method = $class->addMethod($property->name);

            $method
                ->setPublic()
                ->setReturnType('static')
            ;

            $docblockTypes = [];
            $hasIdReference = false;
            foreach ($property->phpTypes as $phpType) {
                if (in_array($phpType, ['string', 'int', 'float', 'bool', 'true', 'false', 'DateTimeInterface'])) {
                    $docblockTypes[] = $phpType;
                    $docblockTypes[] = "{$phpType}[]";

                    if ($phpType === 'DateTimeInterface') {
                        $namespace->addUse(DateTimeInterface::class);
                    }
                } else {
                    $docblockTypes[] = "{$phpType}Properties";
                    $docblockTypes[] = "{$phpType}Properties[]";

                    $namespace->addUse("Seo\\SchemaOrg\\Properties\\{$phpType}Properties");

                    $hasIdReference = true;
                }
            }

            if ($hasIdReference) {
                $docblockTypes[] = 'IdReference';
                $docblockTypes[] = 'IdReference[]';
                $namespace->addUse(\Seo\SchemaOrg\IdReference::class);
            }

            $method->addComment('@param '.implode('|', $docblockTypes).' $value');

            $method->addParameter('value')->setType('mixed');

            $method->addBody("return \$this->set('{$property->name}', \$value);");
        }

        file_put_contents(__DIR__."/../../src/Types/{$type->className}.php", new PsrPrinter()->printFile($file));
    }

    /**
     * @param list<Property> $properties
     * @param list<Type> $types
     *
     * @return list<Property>
     */
    private function getPropertiesForType(Type $type, array $properties, array $types): array
    {
        $typeProperties = array_filter($properties, fn (Property $property) => in_array($type->id, $property->typeIds));

        foreach ($type->parents as $parent) {
            $parentType = array_find($types, fn (Type $type) => $type->id === $parent);
            if ($parentType === null) {
                continue;
            }

            $typeProperties = array_merge($typeProperties, $this->getPropertiesForType($parentType, $properties, $types));
        }

        $result = [];
        foreach ($typeProperties as $property) {
            $result[$property->id] = $property;
        }

        return array_values($result);
    }
}
