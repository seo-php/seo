<?php

declare(strict_types=1);

namespace Seo\Laravel\Tests;

use Illuminate\Contracts\Config\Repository;
use Orchestra\Testbench\TestCase as OrchestraTestCase;
use Seo\Head\Laravel\HeadServiceProvider;
use Seo\IndexNow\Laravel\IndexNowServiceProvider;
use Seo\Laravel\SeoServiceProvider;
use Seo\LlmsTxt\Laravel\LlmsTxtServiceProvider;
use Seo\Robots\Laravel\RobotsServiceProvider;
use Seo\SchemaOrg\Laravel\SchemaOrgServiceProvider;

/**
 * @method \Illuminate\Testing\PendingCommand artisan(string $command, array<string, mixed> $parameters = [])
 */
abstract class TestCase extends OrchestraTestCase
{
    protected function getPackageProviders($app): array
    {
        return [
            HeadServiceProvider::class,
            IndexNowServiceProvider::class,
            LlmsTxtServiceProvider::class,
            RobotsServiceProvider::class,
            SchemaOrgServiceProvider::class,
            SeoServiceProvider::class,
        ];
    }

    protected function defineEnvironment($app): void
    {
        /** @var Repository $config */
        $config = $app->make('config');
        $config->set('app.url', 'https://example.com');
    }
}
