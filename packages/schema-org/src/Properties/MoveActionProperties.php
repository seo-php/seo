<?php

declare(strict_types=1);

namespace Seo\SchemaOrg\Properties;

use Seo\SchemaOrg\IdReference;

interface MoveActionProperties extends ActionProperties
{
    /**
     * @param PlaceProperties|PlaceProperties[]|IdReference|IdReference[] $value
     */
    public function fromLocation(mixed $value): static;

    /**
     * @param PlaceProperties|PlaceProperties[]|IdReference|IdReference[] $value
     */
    public function toLocation(mixed $value): static;
}
