<?php

declare(strict_types=1);

namespace Seo\LlmsTxt\Laravel\Providers;

use Illuminate\Support\ServiceProvider;
use Seo\LlmsTxt\Laravel\LlmsTxtConfig;
use Seo\LlmsTxt\Laravel\LlmsTxtConfigRegistry;

abstract class LlmsTxtServiceProvider extends ServiceProvider
{
    final public function register(): void
    {
        $this->app->afterResolving(LlmsTxtConfigRegistry::class, function (LlmsTxtConfigRegistry $registry): void {
            $config = LlmsTxtConfig::make();

            $this->configure($config);

            $registry->register($config);
        });
    }

    abstract protected function configure(LlmsTxtConfig $config): void;
}
