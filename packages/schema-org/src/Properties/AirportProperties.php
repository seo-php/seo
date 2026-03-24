<?php

declare(strict_types=1);

namespace Seo\SchemaOrg\Properties;

interface AirportProperties extends CivicStructureProperties
{
    /**
     * @param string|string[] $value
     */
    public function iataCode(mixed $value): static;

    /**
     * @param string|string[] $value
     */
    public function icaoCode(mixed $value): static;
}
