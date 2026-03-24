<?php

declare(strict_types=1);

namespace Seo\SchemaOrg\Properties;

interface ClaimReviewProperties extends ReviewProperties
{
    /**
     * @param string|string[] $value
     */
    public function claimReviewed(mixed $value): static;
}
