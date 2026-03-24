<?php

declare(strict_types=1);

namespace Seo\SchemaOrg\Properties;

use Seo\SchemaOrg\IdReference;
use Seo\SchemaOrg\Properties\AnatomicalSystemProperties as AnatomicalSystemProperties1;

interface AnatomicalSystemProperties extends MedicalEntityProperties
{
    /**
     * @param string|string[] $value
     */
    public function associatedPathophysiology(mixed $value): static;

    /**
     * @param AnatomicalStructureProperties|AnatomicalStructureProperties[]|AnatomicalSystemProperties|AnatomicalSystemProperties[]|IdReference|IdReference[] $value
     */
    public function comprisedOf(mixed $value): static;

    /**
     * @param MedicalConditionProperties|MedicalConditionProperties[]|IdReference|IdReference[] $value
     */
    public function relatedCondition(mixed $value): static;

    /**
     * @param AnatomicalStructureProperties|AnatomicalStructureProperties[]|IdReference|IdReference[] $value
     */
    public function relatedStructure(mixed $value): static;

    /**
     * @param MedicalTherapyProperties|MedicalTherapyProperties[]|IdReference|IdReference[] $value
     */
    public function relatedTherapy(mixed $value): static;
}
