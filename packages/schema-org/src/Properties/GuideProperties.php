<?php

declare(strict_types=1);

namespace Seo\SchemaOrg\Properties;

interface GuideProperties extends CreativeWorkProperties
{
    /**
     * @param string|string[] $value
     */
    public function reviewAspect(mixed $value): static;
}
