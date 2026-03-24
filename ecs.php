<?php

declare(strict_types=1);

use Eolica\CodingStandard\Eolica;
use Symplify\EasyCodingStandard\Config\ECSConfig;

return ECSConfig::configure()
    ->withParallel()
    ->withPaths([
        __DIR__.'/packages',
    ])
    ->withRootFiles()
    ->withSets([Eolica::DEFAULT])
    ->withSkip([
        __DIR__.'/packages/schema-org/src/Properties',
        __DIR__.'/packages/schema-org/src/Types',
    ])
;
