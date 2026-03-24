<?php

declare(strict_types=1);

namespace Seo\SchemaOrg\Properties;

use DateTimeInterface;
use Seo\SchemaOrg\IdReference;

interface RealEstateListingProperties extends WebPageProperties
{
    /**
     * @param DateTimeInterface|DateTimeInterface[] $value
     */
    public function datePosted(mixed $value): static;

    /**
     * @param DurationProperties|DurationProperties[]|QuantitativeValueProperties|QuantitativeValueProperties[]|IdReference|IdReference[] $value
     */
    public function leaseLength(mixed $value): static;
}
