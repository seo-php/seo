<?php

declare(strict_types=1);

namespace Seo\SchemaOrg\Properties;

use DateTimeInterface;

interface CreativeWorkSeriesProperties extends CreativeWorkProperties, SeriesProperties
{
    /**
     * @param DateTimeInterface|DateTimeInterface[] $value
     */
    public function endDate(mixed $value): static;

    /**
     * @param string|string[] $value
     */
    public function issn(mixed $value): static;

    /**
     * @param DateTimeInterface|DateTimeInterface[] $value
     */
    public function startDate(mixed $value): static;
}
