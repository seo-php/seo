<?php

declare(strict_types=1);

namespace Seo\LlmsTxt\Laravel;

use Illuminate\Support\ServiceProvider;
use Seo\LlmsTxt\Laravel\Console\Commands;

final class LlmsTxtServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->app->singletonIf(LlmsTxtConfigRegistry::class);
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
        ]);
    }
}
