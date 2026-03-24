<?php

declare(strict_types=1);

namespace Seo\SchemaOrg\Properties;

use Seo\SchemaOrg\IdReference;
use Seo\SchemaOrg\Properties\MuscleProperties as MuscleProperties1;

interface MuscleProperties extends AnatomicalStructureProperties
{
    /**
     * @param MuscleProperties|MuscleProperties[]|IdReference|IdReference[] $value
     */
    public function antagonist(mixed $value): static;

    /**
     * @param VesselProperties|VesselProperties[]|IdReference|IdReference[] $value
     */
    public function bloodSupply(mixed $value): static;

    /**
     * @param AnatomicalStructureProperties|AnatomicalStructureProperties[]|IdReference|IdReference[] $value
     */
    public function insertion(mixed $value): static;

    /**
     * @param string|string[] $value
     */
    public function muscleAction(mixed $value): static;

    /**
     * @param NerveProperties|NerveProperties[]|IdReference|IdReference[] $value
     */
    public function nerve(mixed $value): static;
}
