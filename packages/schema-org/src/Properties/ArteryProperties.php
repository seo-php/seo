<?php

declare(strict_types=1);

namespace Seo\SchemaOrg\Properties;

use Seo\SchemaOrg\IdReference;

interface ArteryProperties extends VesselProperties
{
    /**
     * @param AnatomicalStructureProperties|AnatomicalStructureProperties[]|IdReference|IdReference[] $value
     */
    public function arterialBranch(mixed $value): static;

    /**
     * @param AnatomicalStructureProperties|AnatomicalStructureProperties[]|IdReference|IdReference[] $value
     */
    public function supplyTo(mixed $value): static;
}
