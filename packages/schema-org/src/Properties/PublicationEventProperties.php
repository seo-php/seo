<?php

declare(strict_types=1);

namespace Seo\SchemaOrg\Properties;

use Seo\SchemaOrg\IdReference;

interface PublicationEventProperties extends EventProperties
{
    /**
     * @param bool|bool[] $value
     */
    public function free(mixed $value): static;

    /**
     * @param OrganizationProperties|OrganizationProperties[]|PersonProperties|PersonProperties[]|IdReference|IdReference[] $value
     */
    public function publishedBy(mixed $value): static;

    /**
     * @param BroadcastServiceProperties|BroadcastServiceProperties[]|IdReference|IdReference[] $value
     */
    public function publishedOn(mixed $value): static;
}
