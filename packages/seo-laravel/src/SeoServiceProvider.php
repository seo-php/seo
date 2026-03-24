<?php

declare(strict_types=1);

namespace Seo\Laravel;

use Illuminate\Support\ServiceProvider;
use Seo\Laravel\Console\Commands;

final class SeoServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        if ($this->app->runningInConsole()) {
            $this->bootForConsole();
        }
    }

    private function bootForConsole(): void
    {
        $this->commands([
            Commands\InstallCommand::class,
        ]);
    }
}
