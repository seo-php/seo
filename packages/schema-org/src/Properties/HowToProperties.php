<?php

declare(strict_types=1);

namespace Seo\SchemaOrg\Properties;

use Seo\SchemaOrg\IdReference;

interface HowToProperties extends CreativeWorkProperties
{
    /**
     * @param MonetaryAmountProperties|MonetaryAmountProperties[]|string|string[]|IdReference|IdReference[] $value
     */
    public function estimatedCost(mixed $value): static;

    /**
     * @param DurationProperties|DurationProperties[]|IdReference|IdReference[] $value
     */
    public function performTime(mixed $value): static;

    /**
     * @param DurationProperties|DurationProperties[]|IdReference|IdReference[] $value
     */
    public function prepTime(mixed $value): static;

    /**
     * @param CreativeWorkProperties|CreativeWorkProperties[]|HowToSectionProperties|HowToSectionProperties[]|HowToStepProperties|HowToStepProperties[]|string|string[]|IdReference|IdReference[] $value
     */
    public function step(mixed $value): static;

    /**
     * @param CreativeWorkProperties|CreativeWorkProperties[]|ItemListProperties|ItemListProperties[]|string|string[]|IdReference|IdReference[] $value
     */
    public function steps(mixed $value): static;

    /**
     * @param HowToSupplyProperties|HowToSupplyProperties[]|string|string[]|IdReference|IdReference[] $value
     */
    public function supply(mixed $value): static;

    /**
     * @param HowToToolProperties|HowToToolProperties[]|string|string[]|IdReference|IdReference[] $value
     */
    public function tool(mixed $value): static;

    /**
     * @param DurationProperties|DurationProperties[]|IdReference|IdReference[] $value
     */
    public function totalTime(mixed $value): static;

    /**
     * @param QuantitativeValueProperties|QuantitativeValueProperties[]|string|string[]|IdReference|IdReference[] $value
     */
    public function yield(mixed $value): static;
}
