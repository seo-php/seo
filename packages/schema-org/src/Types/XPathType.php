<?php

declare(strict_types=1);

namespace Seo\SchemaOrg\Types;

use Seo\SchemaOrg\Properties\XPathTypeProperties;
use Seo\SchemaOrg\Type;

final class XPathType extends Type implements XPathTypeProperties
{
    protected function type(): string
    {
        return 'XPathType';
    }
}
