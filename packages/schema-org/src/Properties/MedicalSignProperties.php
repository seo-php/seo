<?php

declare(strict_types=1);

namespace Seo\SchemaOrg\Properties;

use Seo\SchemaOrg\IdReference;

interface MedicalSignProperties extends MedicalSignOrSymptomProperties
{
    /**
     * @param PhysicalExamProperties|PhysicalExamProperties[]|IdReference|IdReference[] $value
     */
    public function identifyingExam(mixed $value): static;

    /**
     * @param MedicalTestProperties|MedicalTestProperties[]|IdReference|IdReference[] $value
     */
    public function identifyingTest(mixed $value): static;
}
