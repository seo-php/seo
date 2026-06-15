<?php

declare(strict_types=1);

namespace Seo\IndexNow\Laravel;

final class IndexNowConfigRegistry
{
    private const string GLOBAL = '';

    /**
     * @var array<string, IndexNowConfig>
     */
    private array $configs = [];

    public function register(IndexNowConfig $config): void
    {
        $this->configs[$config->domain ?? self::GLOBAL] = $config;
    }

    public function resolve(string $domain): ?IndexNowConfig
    {
        return $this->configs[$domain] ?? $this->configs[self::GLOBAL] ?? null;
    }

    /**
     * @return array<string, IndexNowConfig>
     */
    public function all(): array
    {
        return $this->configs;
    }
}
