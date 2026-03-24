<?php

declare(strict_types=1);

namespace Seo\SchemaOrg\Properties;

use DateTimeInterface;
use Seo\SchemaOrg\IdReference;

interface UserCommentsProperties extends UserInteractionProperties
{
    /**
     * @param string|string[] $value
     */
    public function commentText(mixed $value): static;

    /**
     * @param DateTimeInterface|DateTimeInterface[] $value
     */
    public function commentTime(mixed $value): static;

    /**
     * @param OrganizationProperties|OrganizationProperties[]|PersonProperties|PersonProperties[]|IdReference|IdReference[] $value
     */
    public function creator(mixed $value): static;

    /**
     * @param CreativeWorkProperties|CreativeWorkProperties[]|IdReference|IdReference[] $value
     */
    public function discusses(mixed $value): static;

    /**
     * @param string|string[] $value
     */
    public function replyToUrl(mixed $value): static;
}
