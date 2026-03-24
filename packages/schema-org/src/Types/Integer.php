<?php

declare(strict_types=1);

namespace Seo\SchemaOrg\Types;

use Seo\SchemaOrg\Properties\IntegerProperties;
use Seo\SchemaOrg\Type;

final class Integer extends Type implements IntegerProperties
{
    protected function type(): string
    {
        return 'Integer';
    }
}
