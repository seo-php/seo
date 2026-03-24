<?php

declare(strict_types=1);

namespace Seo\SchemaOrg\Properties;

interface OccupationalExperienceRequirementsProperties extends IntangibleProperties
{
    /**
     * @param float|float[]|int|int[] $value
     */
    public function monthsOfExperience(mixed $value): static;
}
