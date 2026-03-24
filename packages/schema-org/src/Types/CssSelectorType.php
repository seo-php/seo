<?php

declare(strict_types=1);

namespace Seo\SchemaOrg\Types;

use Seo\SchemaOrg\Properties\CssSelectorTypeProperties;
use Seo\SchemaOrg\Type;

final class CssSelectorType extends Type implements CssSelectorTypeProperties
{
    protected function type(): string
    {
        return 'CssSelectorType';
    }
}
