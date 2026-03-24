<?php

declare(strict_types=1);

namespace Seo\SchemaOrg\Properties;

use Seo\SchemaOrg\IdReference;

interface ConsumeActionProperties extends ActionProperties
{
    /**
     * @param ActionAccessSpecificationProperties|ActionAccessSpecificationProperties[]|IdReference|IdReference[] $value
     */
    public function actionAccessibilityRequirement(mixed $value): static;

    /**
     * @param OfferProperties|OfferProperties[]|IdReference|IdReference[] $value
     */
    public function expectsAcceptanceOf(mixed $value): static;
}
