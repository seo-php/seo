<?php

declare(strict_types=1);

namespace Seo\SchemaOrg\Properties;

use DateTimeInterface;
use Seo\SchemaOrg\IdReference;

interface OwnershipInfoProperties extends StructuredValueProperties
{
    /**
     * @param OrganizationProperties|OrganizationProperties[]|PersonProperties|PersonProperties[]|IdReference|IdReference[] $value
     */
    public function acquiredFrom(mixed $value): static;

    /**
     * @param DateTimeInterface|DateTimeInterface[] $value
     */
    public function ownedFrom(mixed $value): static;

    /**
     * @param DateTimeInterface|DateTimeInterface[] $value
     */
    public function ownedThrough(mixed $value): static;

    /**
     * @param ProductProperties|ProductProperties[]|ServiceProperties|ServiceProperties[]|IdReference|IdReference[] $value
     */
    public function typeOfGood(mixed $value): static;
}
