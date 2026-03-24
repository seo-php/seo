<?php

declare(strict_types=1);

namespace Seo\SchemaOrg\Properties;

use Seo\SchemaOrg\IdReference;

interface CookActionProperties extends CreateActionProperties
{
    /**
     * @param FoodEstablishmentProperties|FoodEstablishmentProperties[]|PlaceProperties|PlaceProperties[]|IdReference|IdReference[] $value
     */
    public function foodEstablishment(mixed $value): static;

    /**
     * @param FoodEventProperties|FoodEventProperties[]|IdReference|IdReference[] $value
     */
    public function foodEvent(mixed $value): static;

    /**
     * @param RecipeProperties|RecipeProperties[]|IdReference|IdReference[] $value
     */
    public function recipe(mixed $value): static;
}
