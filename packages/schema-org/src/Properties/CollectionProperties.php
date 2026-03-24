<?php

declare(strict_types=1);

namespace Seo\SchemaOrg\Properties;

interface CollectionProperties extends CreativeWorkProperties
{
    /**
     * @param int|int[] $value
     */
    public function collectionSize(mixed $value): static;
}
