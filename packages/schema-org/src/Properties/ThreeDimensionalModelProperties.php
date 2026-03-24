<?php

declare(strict_types=1);

namespace Seo\SchemaOrg\Properties;

interface ThreeDimensionalModelProperties extends MediaObjectProperties
{
    /**
     * @param bool|bool[] $value
     */
    public function isResizable(mixed $value): static;
}
