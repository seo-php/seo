<?php

declare(strict_types=1);

use Rector\Config\RectorConfig;

return RectorConfig::configure()
    ->withParallel()
    ->withPaths([
        __DIR__.'/packages',
    ])
    ->withRootFiles()
    ->withPhpSets(php84: true)
    ->withSkip([
        __DIR__.'/packages/schema-org/src/Properties',
        __DIR__.'/packages/schema-org/src/Types',
    ])
;
