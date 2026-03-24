<?php

declare(strict_types=1);

namespace Seo\SchemaOrg\Properties;

interface FinancialServiceProperties extends LocalBusinessProperties
{
    /**
     * @param string|string[] $value
     */
    public function feesAndCommissionsSpecification(mixed $value): static;
}
