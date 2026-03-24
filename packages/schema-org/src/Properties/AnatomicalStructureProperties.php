<?php

declare(strict_types=1);

namespace Seo\SchemaOrg\Properties;

use Seo\SchemaOrg\IdReference;
use Seo\SchemaOrg\Properties\AnatomicalStructureProperties as AnatomicalStructureProperties1;

interface AnatomicalStructureProperties extends MedicalEntityProperties
{
    /**
     * @param string|string[] $value
     */
    public function associatedPathophysiology(mixed $value): static;

    /**
     * @param string|string[] $value
     */
    public function bodyLocation(mixed $value): static;

    /**
     * @param AnatomicalStructureProperties|AnatomicalStructureProperties[]|IdReference|IdReference[] $value
     */
    public function connectedTo(mixed $value): static;

    /**
     * @param ImageObjectProperties|ImageObjectProperties[]|IdReference|IdReference[] $value
     */
    public function diagram(mixed $value): static;

    /**
     * @param AnatomicalSystemProperties|AnatomicalSystemProperties[]|IdReference|IdReference[] $value
     */
    public function partOfSystem(mixed $value): static;

    /**
     * @param MedicalConditionProperties|MedicalConditionProperties[]|IdReference|IdReference[] $value
     */
    public function relatedCondition(mixed $value): static;

    /**
     * @param MedicalTherapyProperties|MedicalTherapyProperties[]|IdReference|IdReference[] $value
     */
    public function relatedTherapy(mixed $value): static;

    /**
     * @param AnatomicalStructureProperties|AnatomicalStructureProperties[]|IdReference|IdReference[] $value
     */
    public function subStructure(mixed $value): static;
}
