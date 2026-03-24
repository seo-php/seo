<?php

declare(strict_types=1);

namespace Seo\SchemaOrg\Properties;

use DateTimeInterface;

interface RoleProperties extends IntangibleProperties
{
    /**
     * @param DateTimeInterface|DateTimeInterface[] $value
     */
    public function endDate(mixed $value): static;

    /**
     * @param string|string[] $value
     */
    public function namedPosition(mixed $value): static;

    /**
     * @param string|string[] $value
     */
    public function roleName(mixed $value): static;

    /**
     * @param DateTimeInterface|DateTimeInterface[] $value
     */
    public function startDate(mixed $value): static;
}
