<?php

declare(strict_types=1);

namespace Seo\IndexNow\Laravel;

use Illuminate\Support\ServiceProvider;
use Seo\IndexNow\Laravel\Console\Commands;

final class IndexNowServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->app->singletonIf(IndexNowConfigRegistry::class);

        $this->app->singleton(IndexNowClientManager::class);
    }

    public function boot(): void
    {
        if ($this->app->runningInConsole()) {
            $this->bootForConsole();
        }

        $this->loadRoutesFrom(__DIR__.'/../routes/web.php');
    }

    private function bootForConsole(): void
    {
        $this->commands([
            Commands\InstallCommand::class,
            Commands\GenerateKeyCommand::class,
        ]);
    }
}
