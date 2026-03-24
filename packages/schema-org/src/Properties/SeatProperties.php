<?php

declare(strict_types=1);

namespace Seo\SchemaOrg\Properties;

use Seo\SchemaOrg\IdReference;

interface SeatProperties extends IntangibleProperties
{
    /**
     * @param string|string[] $value
     */
    public function seatNumber(mixed $value): static;

    /**
     * @param string|string[] $value
     */
    public function seatRow(mixed $value): static;

    /**
     * @param string|string[] $value
     */
    public function seatSection(mixed $value): static;

    /**
     * @param QualitativeValueProperties|QualitativeValueProperties[]|string|string[]|IdReference|IdReference[] $value
     */
    public function seatingType(mixed $value): static;
}
