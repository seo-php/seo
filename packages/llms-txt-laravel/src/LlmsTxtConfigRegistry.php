<?php

declare(strict_types=1);

namespace Seo\LlmsTxt\Laravel;

final class LlmsTxtConfigRegistry
{
    private const string GLOBAL = '';

    /**
     * @var array<string, LlmsTxtConfig>
     */
    private array $configs = [];

    public function register(LlmsTxtConfig $config): void
    {
        $this->configs[$config->domain ?? self::GLOBAL] = $config;
    }

    public function resolve(string $domain): ?LlmsTxtConfig
    {
        return $this->configs[$domain] ?? $this->configs[self::GLOBAL] ?? null;
    }

    /**
     * @return array<string, LlmsTxtConfig>
     */
    public function all(): array
    {
        return $this->configs;
    }
}
