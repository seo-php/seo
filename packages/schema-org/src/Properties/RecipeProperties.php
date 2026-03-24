<?php

declare(strict_types=1);

namespace Seo\SchemaOrg\Properties;

use Seo\SchemaOrg\IdReference;

interface RecipeProperties extends HowToProperties
{
    /**
     * @param DurationProperties|DurationProperties[]|IdReference|IdReference[] $value
     */
    public function cookTime(mixed $value): static;

    /**
     * @param string|string[] $value
     */
    public function cookingMethod(mixed $value): static;

    /**
     * @param string|string[] $value
     */
    public function ingredients(mixed $value): static;

    /**
     * @param NutritionInformationProperties|NutritionInformationProperties[]|IdReference|IdReference[] $value
     */
    public function nutrition(mixed $value): static;

    /**
     * @param string|string[] $value
     */
    public function recipeCategory(mixed $value): static;

    /**
     * @param string|string[] $value
     */
    public function recipeCuisine(mixed $value): static;

    /**
     * @param ItemListProperties|ItemListProperties[]|PropertyValueProperties|PropertyValueProperties[]|string|string[]|IdReference|IdReference[] $value
     */
    public function recipeIngredient(mixed $value): static;

    /**
     * @param CreativeWorkProperties|CreativeWorkProperties[]|ItemListProperties|ItemListProperties[]|string|string[]|IdReference|IdReference[] $value
     */
    public function recipeInstructions(mixed $value): static;

    /**
     * @param QuantitativeValueProperties|QuantitativeValueProperties[]|string|string[]|IdReference|IdReference[] $value
     */
    public function recipeYield(mixed $value): static;

    /**
     * @param RestrictedDietProperties|RestrictedDietProperties[]|IdReference|IdReference[] $value
     */
    public function suitableForDiet(mixed $value): static;
}
