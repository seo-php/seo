<?php

declare(strict_types=1);

namespace Seo\SchemaOrg\Properties;

interface ParentAudienceProperties extends PeopleAudienceProperties
{
    /**
     * @param float|float[]|int|int[] $value
     */
    public function childMaxAge(mixed $value): static;

    /**
     * @param float|float[]|int|int[] $value
     */
    public function childMinAge(mixed $value): static;
}
