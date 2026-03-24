<?php

declare(strict_types=1);

namespace Seo\SchemaOrg\Properties;

use Seo\SchemaOrg\IdReference;

interface FoodEstablishmentProperties extends LocalBusinessProperties
{
    /**
     * @param bool|bool[]|string|string[] $value
     */
    public function acceptsReservations(mixed $value): static;

    /**
     * @param MenuProperties|MenuProperties[]|string|string[]|IdReference|IdReference[] $value
     */
    public function hasMenu(mixed $value): static;

    /**
     * @param MenuProperties|MenuProperties[]|string|string[]|IdReference|IdReference[] $value
     */
    public function menu(mixed $value): static;

    /**
     * @param string|string[] $value
     */
    public function servesCuisine(mixed $value): static;

    /**
     * @param RatingProperties|RatingProperties[]|IdReference|IdReference[] $value
     */
    public function starRating(mixed $value): static;
}
