<?php

declare(strict_types=1);

use Seo\IndexNow\Laravel\IndexNowConfig;
use Seo\IndexNow\Laravel\Tests\TestCase;

uses(TestCase::class)->in(__DIR__);

/**
 * @param Closure(IndexNowConfig): void $configure
 */
function configureIndexNow(Closure $configure): void
{
    if (TestCase::$current instanceof TestCase) {
        TestCase::$current->configureIndexNowForTest($configure);

        return;
    }

    TestCase::configureIndexNow($configure);
}
