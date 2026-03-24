<?php

declare(strict_types=1);

namespace Seo\SchemaOrg\Properties;

use Seo\SchemaOrg\IdReference;

interface VeinProperties extends VesselProperties
{
    /**
     * @param VesselProperties|VesselProperties[]|IdReference|IdReference[] $value
     */
    public function drainsTo(mixed $value): static;

    /**
     * @param AnatomicalStructureProperties|AnatomicalStructureProperties[]|AnatomicalSystemProperties|AnatomicalSystemProperties[]|IdReference|IdReference[] $value
     */
    public function regionDrained(mixed $value): static;

    /**
     * @param AnatomicalStructureProperties|AnatomicalStructureProperties[]|IdReference|IdReference[] $value
     */
    public function tributary(mixed $value): static;
}
