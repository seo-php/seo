<?php

declare(strict_types=1);

namespace Seo\SchemaOrg\Properties;

use Seo\SchemaOrg\IdReference;

interface NerveProperties extends AnatomicalStructureProperties
{
    /**
     * @param AnatomicalStructureProperties|AnatomicalStructureProperties[]|IdReference|IdReference[] $value
     */
    public function branch(mixed $value): static;

    /**
     * @param MuscleProperties|MuscleProperties[]|IdReference|IdReference[] $value
     */
    public function nerveMotor(mixed $value): static;

    /**
     * @param AnatomicalStructureProperties|AnatomicalStructureProperties[]|SuperficialAnatomyProperties|SuperficialAnatomyProperties[]|IdReference|IdReference[] $value
     */
    public function sensoryUnit(mixed $value): static;

    /**
     * @param BrainStructureProperties|BrainStructureProperties[]|IdReference|IdReference[] $value
     */
    public function sourcedFrom(mixed $value): static;
}
