<?php

declare(strict_types=1);

namespace Seo\SchemaOrg\Properties;

use Seo\SchemaOrg\IdReference;

interface BroadcastFrequencySpecificationProperties extends IntangibleProperties
{
    /**
     * @param float|float[]|int|int[]|QuantitativeValueProperties|QuantitativeValueProperties[]|IdReference|IdReference[] $value
     */
    public function broadcastFrequencyValue(mixed $value): static;

    /**
     * @param QualitativeValueProperties|QualitativeValueProperties[]|string|string[]|IdReference|IdReference[] $value
     */
    public function broadcastSignalModulation(mixed $value): static;

    /**
     * @param string|string[] $value
     */
    public function broadcastSubChannel(mixed $value): static;
}
