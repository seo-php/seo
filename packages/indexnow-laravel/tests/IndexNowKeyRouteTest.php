<?php

declare(strict_types=1);

use Seo\IndexNow\Laravel\IndexNowConfig;
use Seo\IndexNow\Laravel\Tests\TestCase;

it('serves the key file in production', function (): void {
    /** @var TestCase $this */
    configureIndexNow(function (IndexNowConfig $config): void {
        $config
            ->host('example.com')
            ->key('abcd1234')
        ;
    });

    app()->detectEnvironment(fn () => 'production');

    $response = $this->getKeyRoute('/abcd1234.txt');

    $response->assertOk()
        ->assertHeader('Content-Type', 'text/plain; charset=UTF-8')
        ->assertSeeText('abcd1234')
    ;
});

it('returns 404 for the key file in staging', function (): void {
    /** @var TestCase $this */
    configureIndexNow(function (IndexNowConfig $config): void {
        $config
            ->host('example.com')
            ->key('abcd1234')
        ;
    });

    app()->detectEnvironment(fn () => 'staging');

    $this->getKeyRoute('/abcd1234.txt')
        ->assertNotFound()
    ;
});

it('returns 404 when key is not configured', function (): void {
    /** @var TestCase $this */
    configureIndexNow(function (IndexNowConfig $config): void {
        $config->host('example.com');
    });

    app()->detectEnvironment(fn () => 'production');

    $this->getKeyRoute('/abcd1234.txt')
        ->assertNotFound()
    ;
});

it('serves the key file at a custom key location path', function (): void {
    /** @var TestCase $this */
    configureIndexNow(function (IndexNowConfig $config): void {
        $config
            ->host('example.com')
            ->key('abcd1234')
            ->keyLocation('https://example.com/seo/my-key.txt')
        ;
    });

    app()->detectEnvironment(fn () => 'production');

    $response = $this->getKeyRoute('/seo/my-key.txt');

    $response->assertOk()
        ->assertSeeText('abcd1234')
    ;
});
