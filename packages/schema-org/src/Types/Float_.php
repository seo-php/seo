<?php

declare(strict_types=1);

namespace Seo\SchemaOrg\Types;

use Seo\SchemaOrg\Properties\Float_Properties;
use Seo\SchemaOrg\Type;

final class Float_ extends Type implements Float_Properties
{
    protected function type(): string
    {
        return 'Float';
    }
}
