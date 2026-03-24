<?php

declare(strict_types=1);

namespace Seo\SchemaOrg\Properties;

use Seo\SchemaOrg\IdReference;

interface DigitalDocumentPermissionProperties extends IntangibleProperties
{
    /**
     * @param AudienceProperties|AudienceProperties[]|ContactPointProperties|ContactPointProperties[]|OrganizationProperties|OrganizationProperties[]|PersonProperties|PersonProperties[]|IdReference|IdReference[] $value
     */
    public function grantee(mixed $value): static;

    /**
     * @param DigitalDocumentPermissionTypeProperties|DigitalDocumentPermissionTypeProperties[]|IdReference|IdReference[] $value
     */
    public function permissionType(mixed $value): static;
}
