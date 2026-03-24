<?php

declare(strict_types=1);

namespace Seo\IndexNow\Laravel\Http\Controllers;

use Illuminate\Http\Response;

final readonly class IndexNowKeyGetController
{
    public function __invoke(string $key): Response
    {
        /** @var string */
        $url = config('app.url');

        $siteKey = substr(hash('sha256', $url), 0, 32);

        if ($key !== $siteKey) {
            abort(404);
        }

        return new Response(
            content: $siteKey,
            status: Response::HTTP_OK,
            headers: ['Content-Type' => 'text/plain; charset=UTF-8'],
        );
    }
}
