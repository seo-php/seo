<?php

declare(strict_types=1);

namespace Seo\SchemaOrg\Properties;

use DateTimeInterface;
use Seo\SchemaOrg\IdReference;

interface ActionAccessSpecificationProperties extends IntangibleProperties
{
    /**
     * @param DateTimeInterface|DateTimeInterface[] $value
     */
    public function availabilityEnds(mixed $value): static;

    /**
     * @param DateTimeInterface|DateTimeInterface[] $value
     */
    public function availabilityStarts(mixed $value): static;

    /**
     * @param CategoryCodeProperties|CategoryCodeProperties[]|PhysicalActivityCategoryProperties|PhysicalActivityCategoryProperties[]|string|string[]|ThingProperties|ThingProperties[]|IdReference|IdReference[] $value
     */
    public function category(mixed $value): static;

    /**
     * @param GeoShapeProperties|GeoShapeProperties[]|PlaceProperties|PlaceProperties[]|string|string[]|IdReference|IdReference[] $value
     */
    public function eligibleRegion(mixed $value): static;

    /**
     * @param OfferProperties|OfferProperties[]|IdReference|IdReference[] $value
     */
    public function expectsAcceptanceOf(mixed $value): static;

    /**
     * @param GeoShapeProperties|GeoShapeProperties[]|PlaceProperties|PlaceProperties[]|string|string[]|IdReference|IdReference[] $value
     */
    public function ineligibleRegion(mixed $value): static;

    /**
     * @param bool|bool[]|MediaSubscriptionProperties|MediaSubscriptionProperties[]|IdReference|IdReference[] $value
     */
    public function requiresSubscription(mixed $value): static;
}
