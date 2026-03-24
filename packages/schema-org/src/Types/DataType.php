<?php

declare(strict_types=1);

namespace Seo\SchemaOrg\Types;

use Seo\SchemaOrg\Properties\DataTypeProperties;
use Seo\SchemaOrg\Type;

final class DataType extends Type implements DataTypeProperties
{
    protected function type(): string
    {
        return 'DataType';
    }
}
