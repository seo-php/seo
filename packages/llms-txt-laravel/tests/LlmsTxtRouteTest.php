<?php

declare(strict_types=1);

use Seo\LlmsTxt\Laravel\LlmsTxtConfig;
use Seo\LlmsTxt\Laravel\Tests\TestCase;
use Seo\LlmsTxt\LlmsTxt;

it('serves llms.txt in production', function (): void {
    /** @var TestCase $this */
    configureLlmsTxt(function (LlmsTxtConfig $config): void {
        $config->llmsTxt(fn () => LlmsTxt::make('My Site', 'A description'));
    });

    app()->detectEnvironment(fn () => 'production');

    $response = $this->getLlmsTxtRoute();

    $response->assertOk()
        ->assertHeader('Content-Type', 'text/plain; charset=UTF-8')
        ->assertSeeText('# My Site')
        ->assertSeeText('> A description', escape: false)
    ;
});

it('serves llms.txt in local', function (): void {
    /** @var TestCase $this */
    configureLlmsTxt(function (LlmsTxtConfig $config): void {
        $config->llmsTxt(fn () => LlmsTxt::make('My Site', 'A description'));
    });

    app()->detectEnvironment(fn () => 'local');

    $response = $this->getLlmsTxtRoute();

    $response->assertOk()
        ->assertSeeText('# My Site')
    ;
});

it('returns 404 for llms.txt in staging', function (): void {
    /** @var TestCase $this */
    configureLlmsTxt(function (LlmsTxtConfig $config): void {
        $config->llmsTxt(fn () => LlmsTxt::make('My Site'));
    });

    app()->detectEnvironment(fn () => 'staging');

    $this->getLlmsTxtRoute()
        ->assertNotFound()
    ;
});

it('returns 404 when llms txt is not configured', function (): void {
    /** @var TestCase $this */
    configureLlmsTxt(function (LlmsTxtConfig $config): void {
        $config->domain('example.com');
    });

    app()->detectEnvironment(fn () => 'production');

    $this->getLlmsTxtRoute()
        ->assertNotFound()
    ;
});

it('serves llms.txt for a domain-specific config', function (): void {
    /** @var TestCase $this */
    configureLlmsTxt(function (LlmsTxtConfig $config): void {
        $config
            ->llmsTxt(fn () => LlmsTxt::make('Marketing Site'))
            ->domain('marketing.example.com')
        ;
    });

    app()->detectEnvironment(fn () => 'production');

    $response = $this->getLlmsTxtRoute(host: 'marketing.example.com');

    $response->assertOk()
        ->assertSeeText('# Marketing Site')
    ;
});
