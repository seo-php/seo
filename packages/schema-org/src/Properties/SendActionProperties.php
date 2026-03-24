<?php

declare(strict_types=1);

namespace Seo\SchemaOrg\Properties;

use Seo\SchemaOrg\IdReference;

interface SendActionProperties extends TransferActionProperties
{
    /**
     * @param DeliveryMethodProperties|DeliveryMethodProperties[]|IdReference|IdReference[] $value
     */
    public function deliveryMethod(mixed $value): static;

    /**
     * @param AudienceProperties|AudienceProperties[]|ContactPointProperties|ContactPointProperties[]|OrganizationProperties|OrganizationProperties[]|PersonProperties|PersonProperties[]|IdReference|IdReference[] $value
     */
    public function recipient(mixed $value): static;
}
