<?php

declare(strict_types=1);

namespace Seo\SchemaOrg\Properties;

interface IndividualProductProperties extends ProductProperties
{
    /**
     * @param string|string[] $value
     */
    public function serialNumber(mixed $value): static;
}
