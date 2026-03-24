<?php

declare(strict_types=1);

namespace Seo\SchemaOrg\Properties;

use DateTimeInterface;
use Seo\SchemaOrg\IdReference;

interface DataFeedItemProperties extends IntangibleProperties
{
    /**
     * @param DateTimeInterface|DateTimeInterface[] $value
     */
    public function dateCreated(mixed $value): static;

    /**
     * @param DateTimeInterface|DateTimeInterface[] $value
     */
    public function dateDeleted(mixed $value): static;

    /**
     * @param DateTimeInterface|DateTimeInterface[] $value
     */
    public function dateModified(mixed $value): static;

    /**
     * @param ThingProperties|ThingProperties[]|IdReference|IdReference[] $value
     */
    public function item(mixed $value): static;
}
