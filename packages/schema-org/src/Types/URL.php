<?php

declare(strict_types=1);

namespace Seo\SchemaOrg\Types;

use Seo\SchemaOrg\Properties\URLProperties;
use Seo\SchemaOrg\Type;

final class URL extends Type implements URLProperties
{
    protected function type(): string
    {
        return 'URL';
    }
}
