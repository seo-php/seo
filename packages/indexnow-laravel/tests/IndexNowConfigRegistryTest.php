<?php

declare(strict_types=1);

use Seo\IndexNow\Laravel\IndexNowConfig;
use Seo\IndexNow\Laravel\IndexNowConfigRegistry;

it('registers and resolves configs by domain', function (): void {
    $registry = new IndexNowConfigRegistry();

    $global = IndexNowConfig::make()
        ->host('example.com')
        ->key('abcd1234')
    ;

    $marketing = IndexNowConfig::make()
        ->host('marketing.example.com')
        ->key('marketing1')
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
