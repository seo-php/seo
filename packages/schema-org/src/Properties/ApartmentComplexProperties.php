<?php

declare(strict_types=1);

namespace Seo\SchemaOrg\Properties;

use Seo\SchemaOrg\IdReference;

interface ApartmentComplexProperties extends ResidenceProperties
{
    /**
     * @param QuantitativeValueProperties|QuantitativeValueProperties[]|IdReference|IdReference[] $value
     */
    public function numberOfAccommodationUnits(mixed $value): static;

    /**
     * @param QuantitativeValueProperties|QuantitativeValueProperties[]|IdReference|IdReference[] $value
     */
    public function numberOfAvailableAccommodationUnits(mixed $value): static;

    /**
     * @param float|float[]|int|int[]|QuantitativeValueProperties|QuantitativeValueProperties[]|IdReference|IdReference[] $value
     */
    public function numberOfBedrooms(mixed $value): static;

    /**
     * @param bool|bool[]|string|string[] $value
     */
    public function petsAllowed(mixed $value): static;

    /**
     * @param string|string[] $value
     */
    public function tourBookingPage(mixed $value): static;
}
