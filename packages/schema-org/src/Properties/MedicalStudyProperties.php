<?php

declare(strict_types=1);

namespace Seo\SchemaOrg\Properties;

use Seo\SchemaOrg\IdReference;

interface MedicalStudyProperties extends MedicalEntityProperties
{
    /**
     * @param MedicalConditionProperties|MedicalConditionProperties[]|IdReference|IdReference[] $value
     */
    public function healthCondition(mixed $value): static;

    /**
     * @param OrganizationProperties|OrganizationProperties[]|PersonProperties|PersonProperties[]|IdReference|IdReference[] $value
     */
    public function sponsor(mixed $value): static;

    /**
     * @param EventStatusTypeProperties|EventStatusTypeProperties[]|MedicalStudyStatusProperties|MedicalStudyStatusProperties[]|string|string[]|IdReference|IdReference[] $value
     */
    public function status(mixed $value): static;

    /**
     * @param AdministrativeAreaProperties|AdministrativeAreaProperties[]|IdReference|IdReference[] $value
     */
    public function studyLocation(mixed $value): static;

    /**
     * @param MedicalEntityProperties|MedicalEntityProperties[]|IdReference|IdReference[] $value
     */
    public function studySubject(mixed $value): static;
}
