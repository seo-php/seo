<?php

declare(strict_types=1);

namespace Seo\IndexNow\Laravel\Providers;

use Illuminate\Support\ServiceProvider;
use Seo\IndexNow\Laravel\IndexNowConfig;
use Seo\IndexNow\Laravel\IndexNowConfigRegistry;

abstract class IndexNowServiceProvider extends ServiceProvider
{
    final public function register(): void
    {
        $this->app->afterResolving(IndexNowConfigRegistry::class, function (IndexNowConfigRegistry $registry): void {
            $config = IndexNowConfig::make();

            $this->configure($config);

            $registry->register($config);
        });
    }

    abstract protected function configure(IndexNowConfig $config): void;
}
