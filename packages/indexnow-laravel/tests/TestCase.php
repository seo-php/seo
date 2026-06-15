<?php

declare(strict_types=1);

namespace Seo\IndexNow\Laravel\Tests;

use Closure;
use Illuminate\Contracts\Config\Repository;
use Illuminate\Http\Request;
use Illuminate\Testing\TestResponse;
use Orchestra\Testbench\TestCase as OrchestraTestCase;
use Seo\IndexNow\Laravel\IndexNowConfig;
use Seo\IndexNow\Laravel\IndexNowServiceProvider;
use Seo\IndexNow\Laravel\Providers\IndexNowServiceProvider as AppIndexNowServiceProvider;
use Symfony\Component\HttpFoundation\Response as SymfonyResponse;

/**
 * @method \Illuminate\Testing\PendingCommand artisan(string $command, array<string, mixed> $parameters = [])
 */
abstract class TestCase extends OrchestraTestCase
{
    public static ?self $current = null;

    /**
     * @var ?Closure(IndexNowConfig): void
     */
    public static ?Closure $configureUsing = null;

    /**
     * @param Closure(IndexNowConfig): void $configure
     */
    final public static function configureIndexNow(Closure $configure): void
    {
        self::$configureUsing = $configure;
    }

    /**
     * @param Closure(IndexNowConfig): void $configure
     */
    final public function configureIndexNowForTest(Closure $configure): void
    {
        self::$configureUsing = $configure;
        $this->refreshApplication();
    }

    protected function setUp(): void
    {
        self::$current = $this;

        parent::setUp();
    }

    protected function tearDown(): void
    {
        self::$configureUsing = null;
        self::$current = null;

        parent::tearDown();
    }

    /**
     * @return TestResponse<SymfonyResponse>
     */
    final public function getKeyRoute(string $path, string $host = 'example.com'): TestResponse
    {
        $app = $this->app;
        assert($app !== null);

        $response = $app->handle(Request::create($path, 'GET', server: ['HTTP_HOST' => $host]));

        return TestResponse::fromBaseResponse($response);
    }

    protected function getPackageProviders($app): array
    {
        return [
            IndexNowServiceProvider::class,
            TestIndexNowServiceProvider::class,
        ];
    }

    protected function defineEnvironment($app): void
    {
        /** @var Repository $config */
        $config = $app->make('config');
        $config->set('app.url', 'https://example.com');
    }
}

final class TestIndexNowServiceProvider extends AppIndexNowServiceProvider
{
    protected function configure(IndexNowConfig $config): void
    {
        if (TestCase::$configureUsing !== null) {
            (TestCase::$configureUsing)($config);
        }
    }
}
