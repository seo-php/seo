<?php

declare(strict_types=1);

namespace Seo\SchemaOrg\Properties;

use Seo\SchemaOrg\IdReference;

interface AggregateOfferProperties extends OfferProperties
{
    /**
     * @param float|float[]|int|int[]|string|string[] $value
     */
    public function highPrice(mixed $value): static;

    /**
     * @param float|float[]|int|int[]|string|string[] $value
     */
    public function lowPrice(mixed $value): static;

    /**
     * @param int|int[] $value
     */
    public function offerCount(mixed $value): static;

    /**
     * @param DemandProperties|DemandProperties[]|OfferProperties|OfferProperties[]|IdReference|IdReference[] $value
     */
    public function offers(mixed $value): static;
}
