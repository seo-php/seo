<?php

declare(strict_types=1);

namespace Seo\SchemaOrg\Properties;

use Seo\SchemaOrg\IdReference;

interface ReceiveActionProperties extends TransferActionProperties
{
    /**
     * @param DeliveryMethodProperties|DeliveryMethodProperties[]|IdReference|IdReference[] $value
     */
    public function deliveryMethod(mixed $value): static;

    /**
     * @param AudienceProperties|AudienceProperties[]|OrganizationProperties|OrganizationProperties[]|PersonProperties|PersonProperties[]|IdReference|IdReference[] $value
     */
    public function sender(mixed $value): static;
}
