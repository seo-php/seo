<?php

declare(strict_types=1);

namespace Seo\SchemaOrg\Properties;

use Seo\SchemaOrg\IdReference;

interface HowToDirectionProperties extends CreativeWorkProperties, ListItemProperties
{
    /**
     * @param MediaObjectProperties|MediaObjectProperties[]|string|string[]|IdReference|IdReference[] $value
     */
    public function afterMedia(mixed $value): static;

    /**
     * @param MediaObjectProperties|MediaObjectProperties[]|string|string[]|IdReference|IdReference[] $value
     */
    public function beforeMedia(mixed $value): static;

    /**
     * @param MediaObjectProperties|MediaObjectProperties[]|string|string[]|IdReference|IdReference[] $value
     */
    public function duringMedia(mixed $value): static;

    /**
     * @param DurationProperties|DurationProperties[]|IdReference|IdReference[] $value
     */
    public function performTime(mixed $value): static;

    /**
     * @param DurationProperties|DurationProperties[]|IdReference|IdReference[] $value
     */
    public function prepTime(mixed $value): static;

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
}
