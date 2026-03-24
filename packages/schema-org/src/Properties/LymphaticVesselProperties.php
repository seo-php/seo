<?php

declare(strict_types=1);

namespace Seo\SchemaOrg\Properties;

use Seo\SchemaOrg\IdReference;

interface LymphaticVesselProperties extends VesselProperties
{
    /**
     * @param VesselProperties|VesselProperties[]|IdReference|IdReference[] $value
     */
    public function originatesFrom(mixed $value): static;

    /**
     * @param AnatomicalStructureProperties|AnatomicalStructureProperties[]|AnatomicalSystemProperties|AnatomicalSystemProperties[]|IdReference|IdReference[] $value
     */
    public function regionDrained(mixed $value): static;

    /**
     * @param VesselProperties|VesselProperties[]|IdReference|IdReference[] $value
     */
    public function runsTo(mixed $value): static;
}
