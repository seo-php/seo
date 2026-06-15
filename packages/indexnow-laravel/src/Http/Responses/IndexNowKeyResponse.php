<?php

declare(strict_types=1);

namespace Seo\IndexNow\Laravel\Http\Responses;

use Illuminate\Contracts\Support\Responsable;
use Illuminate\Http\Response;

final readonly class IndexNowKeyResponse implements Responsable
{
    public function __construct(private string $key) {}

    public function toResponse($request): Response
    {
        return new Response(
            content: $this->key,
            status: Response::HTTP_OK,
            headers: ['Content-Type' => 'text/plain; charset=UTF-8'],
        );
    }
}
