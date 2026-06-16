<?php

declare(strict_types=1);

use Seo\Laravel\Tests\TestCase;

uses(TestCase::class)->in(__DIR__);

/**
 * @return array<int, string>
 */
function seoProviderPaths(): array
{
    return [
        app_path('Providers/HeadServiceProvider.php'),
        app_path('Providers/IndexNowServiceProvider.php'),
        app_path('Providers/LlmsTxtServiceProvider.php'),
        app_path('Providers/RobotsTxtServiceProvider.php'),
        app_path('Providers/SchemaOrgServiceProvider.php'),
    ];
}

function removeSeoProviders(): void
{
    foreach (seoProviderPaths() as $providerPath) {
        if (file_exists($providerPath)) {
            unlink($providerPath);
        }
    }
}
