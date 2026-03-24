<?php

declare(strict_types=1);

namespace Seo\SchemaOrg\Properties;

use Seo\SchemaOrg\IdReference;

interface TVSeasonProperties extends CreativeWorkSeasonProperties, CreativeWorkProperties
{
    /**
     * @param CountryProperties|CountryProperties[]|IdReference|IdReference[] $value
     */
    public function countryOfOrigin(mixed $value): static;

    /**
     * @param TVSeriesProperties|TVSeriesProperties[]|IdReference|IdReference[] $value
     */
    public function partOfTVSeries(mixed $value): static;

    /**
     * @param string|string[] $value
     */
    public function titleEIDR(mixed $value): static;
}
