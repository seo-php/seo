<?php

declare(strict_types=1);

namespace Seo\SchemaOrg\Properties;

use Seo\SchemaOrg\IdReference;

interface MedicalDeviceProperties extends MedicalEntityProperties
{
    /**
     * @param MedicalEntityProperties|MedicalEntityProperties[]|IdReference|IdReference[] $value
     */
    public function adverseOutcome(mixed $value): static;

    /**
     * @param MedicalContraindicationProperties|MedicalContraindicationProperties[]|string|string[]|IdReference|IdReference[] $value
     */
    public function contraindication(mixed $value): static;

    /**
     * @param string|string[] $value
     */
    public function postOp(mixed $value): static;

    /**
     * @param string|string[] $value
     */
    public function preOp(mixed $value): static;

    /**
     * @param string|string[] $value
     */
    public function procedure(mixed $value): static;

    /**
     * @param MedicalEntityProperties|MedicalEntityProperties[]|IdReference|IdReference[] $value
     */
    public function seriousAdverseOutcome(mixed $value): static;
}
