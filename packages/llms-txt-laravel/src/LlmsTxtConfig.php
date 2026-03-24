<?php

declare(strict_types=1);

namespace Seo\LlmsTxt\Laravel;

use Closure;
use Seo\LlmsTxt\LlmsTxt;

final class LlmsTxtConfig
{
    /**
     * @var (Closure(): LlmsTxt)|null
     */
    public private(set) ?Closure $llmsTxt = null;

    public private(set) ?string $domain = null;

    /**
     * @var array<int, string>
     */
    public private(set) array $middleware = [];

    public static function make(): self
    {
        return new self();
    }

    /**
     * @param Closure(): LlmsTxt $llmsTxt
     */
    public function llmsTxt(Closure $llmsTxt): self
    {
        $this->llmsTxt = $llmsTxt;

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
