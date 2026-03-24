<?php

declare(strict_types=1);

namespace Seo\SchemaOrg\Properties;

use Seo\SchemaOrg\IdReference;
use Seo\SchemaOrg\Properties\MenuItemProperties as MenuItemProperties1;

interface MenuItemProperties extends IntangibleProperties
{
    /**
     * @param MenuItemProperties|MenuItemProperties[]|MenuSectionProperties|MenuSectionProperties[]|IdReference|IdReference[] $value
     */
    public function menuAddOn(mixed $value): static;

    /**
     * @param NutritionInformationProperties|NutritionInformationProperties[]|IdReference|IdReference[] $value
     */
    public function nutrition(mixed $value): static;

    /**
     * @param DemandProperties|DemandProperties[]|OfferProperties|OfferProperties[]|IdReference|IdReference[] $value
     */
    public function offers(mixed $value): static;

    /**
     * @param RestrictedDietProperties|RestrictedDietProperties[]|IdReference|IdReference[] $value
     */
    public function suitableForDiet(mixed $value): static;
}
