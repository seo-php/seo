<?php

declare(strict_types=1);

namespace Seo\SchemaOrg\Properties;

interface MedicalGuidelineRecommendationProperties extends MedicalGuidelineProperties
{
    /**
     * @param string|string[] $value
     */
    public function recommendationStrength(mixed $value): static;
}
