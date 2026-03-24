<?php

declare(strict_types=1);

namespace Seo\SchemaOrg\Properties;

use Seo\SchemaOrg\IdReference;

interface LocalBusinessProperties extends PlaceProperties, OrganizationProperties
{
    /**
     * @param OrganizationProperties|OrganizationProperties[]|IdReference|IdReference[] $value
     */
    public function branchOf(mixed $value): static;

    /**
     * @param string|string[] $value
     */
    public function currenciesAccepted(mixed $value): static;

    /**
     * @param string|string[] $value
     */
    public function openingHours(mixed $value): static;

    /**
     * @param string|string[] $value
     */
    public function paymentAccepted(mixed $value): static;

    /**
     * @param string|string[] $value
     */
    public function priceRange(mixed $value): static;
}
