<?php

declare(strict_types=1);

namespace Seo\SchemaOrg\Properties;

interface MovieTheaterProperties extends CivicStructureProperties, EntertainmentBusinessProperties
{
    /**
     * @param float|float[]|int|int[] $value
     */
    public function screenCount(mixed $value): static;
}
