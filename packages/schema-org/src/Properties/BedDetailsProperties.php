<?php

declare(strict_types=1);

namespace Seo\SchemaOrg\Properties;

use Seo\SchemaOrg\IdReference;

interface BedDetailsProperties extends IntangibleProperties
{
    /**
     * @param float|float[]|int|int[] $value
     */
    public function numberOfBeds(mixed $value): static;

    /**
     * @param BedTypeProperties|BedTypeProperties[]|string|string[]|IdReference|IdReference[] $value
     */
    public function typeOfBed(mixed $value): static;
}
