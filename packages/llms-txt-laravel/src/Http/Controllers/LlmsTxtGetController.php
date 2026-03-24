<?php

declare(strict_types=1);

namespace Seo\LlmsTxt\Laravel\Http\Controllers;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Http\Request;
use Seo\LlmsTxt\Laravel\Http\Responses\LlmsTxtResponse;
use Seo\LlmsTxt\Laravel\LlmsTxtConfigRegistry;

final readonly class LlmsTxtGetController
{
    public function __construct(
        private LlmsTxtConfigRegistry $registry,
        private Application $app,
    ) {}

    public function __invoke(Request $request): LlmsTxtResponse
    {
        $config = $this->registry->resolve($request->getHost());

        if ($config?->llmsTxt === null || !$this->app->environment(['production', 'local'])) {
            abort(404);
        }

        $llms = ($config->llmsTxt)();

        return new LlmsTxtResponse($llms);
    }
}
