<?php

declare(strict_types=1);

namespace Seo\IndexNow\Laravel;

use Seo\IndexNow\Endpoint;

final class IndexNowConfig
{
    public private(set) string $host = '';

    public private(set) string $key = '';

    public private(set) ?string $keyLocation = null;

    public private(set) ?Endpoint $endpoint = null;

    public private(set) ?string $domain = null;

    /**
     * @var array<int, string>
     */
    public private(set) array $middleware = [];

    public static function make(): self
    {
        return new self();
    }

    public function host(string $host): self
    {
        $this->host = $host;

        return $this;
    }

    public function key(string $key): self
    {
        $this->key = $key;

        return $this;
    }

    public function keyLocation(?string $keyLocation): self
    {
        $this->keyLocation = $keyLocation;

        return $this;
    }

    public function endpoint(?Endpoint $endpoint): self
    {
        $this->endpoint = $endpoint;

        return $this;
    }

    public function domain(?string $domain): self
    {
        $this->domain = $domain;

        return $this;
    }

    /**
     * @param array<int, string> $middleware
     */
    public function middleware(array $middleware): self
    {
        $this->middleware = [
            ...$this->middleware,
            ...$middleware,
        ];

        return $this;
    }
}
