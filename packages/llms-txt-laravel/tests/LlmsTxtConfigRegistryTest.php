<?php

declare(strict_types=1);

use Seo\LlmsTxt\Laravel\LlmsTxtConfig;
use Seo\LlmsTxt\Laravel\LlmsTxtConfigRegistry;
use Seo\LlmsTxt\LlmsTxt;

it('registers and resolves configs by domain', function (): void {
    $registry = new LlmsTxtConfigRegistry();

    $global = LlmsTxtConfig::make()
        ->llmsTxt(fn () => LlmsTxt::make('Global Site'))
    ;

    $marketing = LlmsTxtConfig::make()
        ->llmsTxt(fn () => LlmsTxt::make('Marketing Site'))
        ->domain('marketing.example.com')
    ;

    $registry->register($global);
    $registry->register($marketing);

    expect($registry->resolve('example.com'))->toBe($global)
        ->and($registry->resolve('marketing.example.com'))->toBe($marketing)
        ->and($registry->resolve('unknown.example.com'))->toBe($global)
        ->and($registry->all())->toHaveCount(2)
    ;
});

it('returns null when no config matches and no global fallback exists', function (): void {
    $registry = new LlmsTxtConfigRegistry();

    $marketing = LlmsTxtConfig::make()
        ->llmsTxt(fn () => LlmsTxt::make('Marketing Site'))
        ->domain('marketing.example.com')
    ;

    $registry->register($marketing);

    expect($registry->resolve('marketing.example.com'))->toBe($marketing)
        ->and($registry->resolve('example.com'))->toBeNull()
    ;
});
