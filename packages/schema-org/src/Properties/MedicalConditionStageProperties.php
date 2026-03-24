<?php

declare(strict_types=1);

namespace Seo\SchemaOrg\Properties;

interface MedicalConditionStageProperties extends MedicalIntangibleProperties
{
    /**
     * @param float|float[]|int|int[] $value
     */
    public function stageAsNumber(mixed $value): static;

    /**
     * @param string|string[] $value
     */
    public function subStageSuffix(mixed $value): static;
}
