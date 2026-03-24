<?php

declare(strict_types=1);

namespace Seo\SchemaOrg\Properties;

use Seo\SchemaOrg\IdReference;

interface RsvpActionProperties extends InformActionProperties
{
    /**
     * @param float|float[]|int|int[] $value
     */
    public function additionalNumberOfGuests(mixed $value): static;

    /**
     * @param CommentProperties|CommentProperties[]|IdReference|IdReference[] $value
     */
    public function comment(mixed $value): static;

    /**
     * @param RsvpResponseTypeProperties|RsvpResponseTypeProperties[]|IdReference|IdReference[] $value
     */
    public function rsvpResponse(mixed $value): static;
}
