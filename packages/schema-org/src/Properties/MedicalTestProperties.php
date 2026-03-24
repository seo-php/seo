<?php

declare(strict_types=1);

namespace Seo\SchemaOrg\Properties;

use Seo\SchemaOrg\IdReference;

interface MedicalTestProperties extends MedicalEntityProperties
{
    /**
     * @param DrugProperties|DrugProperties[]|IdReference|IdReference[] $value
     */
    public function affectedBy(mixed $value): static;

    /**
     * @param MedicalEnumerationProperties|MedicalEnumerationProperties[]|string|string[]|IdReference|IdReference[] $value
     */
    public function normalRange(mixed $value): static;

    /**
     * @param MedicalSignProperties|MedicalSignProperties[]|IdReference|IdReference[] $value
     */
    public function signDetected(mixed $value): static;

    /**
     * @param MedicalConditionProperties|MedicalConditionProperties[]|IdReference|IdReference[] $value
     */
    public function usedToDiagnose(mixed $value): static;

    /**
     * @param MedicalDeviceProperties|MedicalDeviceProperties[]|IdReference|IdReference[] $value
     */
    public function usesDevice(mixed $value): static;
}
