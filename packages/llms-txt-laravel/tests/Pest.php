<?php

declare(strict_types=1);

use Seo\LlmsTxt\Laravel\LlmsTxtConfig;
use Seo\LlmsTxt\Laravel\Tests\TestCase;

uses(TestCase::class)->in(__DIR__);

/**
 * @param Closure(LlmsTxtConfig): void $configure
 */
function configureLlmsTxt(Closure $configure): void
{
    if (TestCase::$current instanceof TestCase) {
        TestCase::$current->configureLlmsTxtForTest($configure);

        return;
    }

    TestCase::configureLlmsTxt($configure);
}
