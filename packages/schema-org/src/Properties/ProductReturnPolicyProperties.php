<?php

declare(strict_types=1);

namespace Seo\SchemaOrg\Properties;

interface ProductReturnPolicyProperties extends IntangibleProperties
{
    /**
     * @param int|int[] $value
     */
    public function productReturnDays(mixed $value): static;

    /**
     * @param string|string[] $value
     */
    public function productReturnLink(mixed $value): static;
}
