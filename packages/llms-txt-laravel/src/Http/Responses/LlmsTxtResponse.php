<?php

declare(strict_types=1);

namespace Seo\LlmsTxt\Laravel\Http\Responses;

use Illuminate\Contracts\Support\Responsable;
use Illuminate\Http\Response;
use Seo\LlmsTxt\LlmsTxt;
use Seo\LlmsTxt\LlmsTxtRenderer;

final readonly class LlmsTxtResponse implements Responsable
{
    public function __construct(private LlmsTxt $llms) {}

    public function toResponse($request): Response
    {
        return new Response(
            content: new LlmsTxtRenderer()->render($this->llms),
            status: Response::HTTP_OK,
            headers: ['Content-Type' => 'text/plain; charset=UTF-8'],
        );
    }
}
