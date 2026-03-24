<?php

declare(strict_types=1);

namespace Seo\SchemaOrg\Properties;

use Seo\SchemaOrg\IdReference;

interface SuperficialAnatomyProperties extends MedicalEntityProperties
{
    /**
     * @param string|string[] $value
     */
    public function associatedPathophysiology(mixed $value): static;

    /**
     * @param AnatomicalStructureProperties|AnatomicalStructureProperties[]|AnatomicalSystemProperties|AnatomicalSystemProperties[]|IdReference|IdReference[] $value
     */
    public function relatedAnatomy(mixed $value): static;

    /**
     * @param MedicalConditionProperties|MedicalConditionProperties[]|IdReference|IdReference[] $value
     */
    public function relatedCondition(mixed $value): static;

    /**
     * @param MedicalTherapyProperties|MedicalTherapyProperties[]|IdReference|IdReference[] $value
     */
    public function relatedTherapy(mixed $value): static;

    /**
     * @param string|string[] $value
     */
    public function significance(mixed $value): static;
}
