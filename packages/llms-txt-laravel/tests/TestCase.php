<?php

declare(strict_types=1);

namespace Seo\LlmsTxt\Laravel\Tests;

use Closure;
use Illuminate\Contracts\Config\Repository;
use Illuminate\Http\Request;
use Illuminate\Testing\TestResponse;
use Orchestra\Testbench\TestCase as OrchestraTestCase;
use Seo\LlmsTxt\Laravel\LlmsTxtConfig;
use Seo\LlmsTxt\Laravel\LlmsTxtServiceProvider;
use Seo\LlmsTxt\Laravel\Providers\LlmsTxtServiceProvider as AppLlmsTxtServiceProvider;
use Symfony\Component\HttpFoundation\Response as SymfonyResponse;

/**
 * @method \Illuminate\Testing\PendingCommand artisan(string $command, array<string, mixed> $parameters = [])
 */
abstract class TestCase extends OrchestraTestCase
{
    public static ?self $current = null;

    /**
     * @var ?Closure(LlmsTxtConfig): void
     */
    public static ?Closure $configureUsing = null;

    /**
     * @param Closure(LlmsTxtConfig): void $configure
     */
    final public static function configureLlmsTxt(Closure $configure): void
    {
        self::$configureUsing = $configure;
    }

    /**
     * @param Closure(LlmsTxtConfig): void $configure
     */
    final public function configureLlmsTxtForTest(Closure $configure): void
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
    final public function getLlmsTxtRoute(string $path = '/llms.txt', string $host = 'example.com'): TestResponse
    {
        $app = $this->app;
        assert($app !== null);

        $response = $app->handle(Request::create($path, 'GET', server: ['HTTP_HOST' => $host]));

        return TestResponse::fromBaseResponse($response);
    }

    protected function getPackageProviders($app): array
    {
        return [
            LlmsTxtServiceProvider::class,
            TestLlmsTxtServiceProvider::class,
        ];
    }

    protected function defineEnvironment($app): void
    {
        /** @var Repository $config */
        $config = $app->make('config');
        $config->set('app.url', 'https://example.com');
    }
}

final class TestLlmsTxtServiceProvider extends AppLlmsTxtServiceProvider
{
    protected function configure(LlmsTxtConfig $config): void
    {
        if (TestCase::$configureUsing !== null) {
            (TestCase::$configureUsing)($config);
        }
    }
}
