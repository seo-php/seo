<?php

declare(strict_types=1);

namespace Seo\IndexNow\Laravel\Http\Controllers;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Http\Request;
use Seo\IndexNow\Laravel\Http\Responses\IndexNowKeyResponse;
use Seo\IndexNow\Laravel\IndexNowConfigRegistry;

final readonly class IndexNowKeyGetController
{
    public function __construct(
        private IndexNowConfigRegistry $registry,
        private Application $app,
    ) {}

    public function __invoke(Request $request): IndexNowKeyResponse
    {
        $config = $this->registry->resolve($request->getHost());

        if ($config === null || $config->key === '' || !$this->app->environment(['production', 'local'])) {
            abort(404);
        }

        return new IndexNowKeyResponse($config->key);
    }
}
