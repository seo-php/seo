<?php

declare(strict_types=1);

namespace Seo\SchemaOrg\Properties;

use Seo\SchemaOrg\IdReference;

interface HotelRoomProperties extends RoomProperties
{
    /**
     * @param BedDetailsProperties|BedDetailsProperties[]|BedTypeProperties|BedTypeProperties[]|string|string[]|IdReference|IdReference[] $value
     */
    public function bed(mixed $value): static;

    /**
     * @param QuantitativeValueProperties|QuantitativeValueProperties[]|IdReference|IdReference[] $value
     */
    public function occupancy(mixed $value): static;
}
