<?php

declare(strict_types=1);

use Http\Mock\Client as MockClient;
use Psr\Http\Client\ClientInterface;
use Psr\Http\Message\RequestInterface;
use Seo\IndexNow\Endpoint;
use Seo\IndexNow\IndexNowClient;
use Seo\IndexNow\Laravel\IndexNowClientManager;
use Seo\IndexNow\Laravel\IndexNowConfig;

it('throws when host is not configured', function (): void {
    configureIndexNow(function (IndexNowConfig $config): void {
        $config->key('abcd1234');
    });

    $manager = app(IndexNowClientManager::class);

    expect(fn () => $manager->client('example.com'))
        ->toThrow(RuntimeException::class, 'IndexNow host is not configured.')
    ;
});

it('throws when key is not configured', function (): void {
    configureIndexNow(function (IndexNowConfig $config): void {
        $config->host('example.com');
    });

    $manager = app(IndexNowClientManager::class);

    expect(fn () => $manager->client('example.com'))
        ->toThrow(RuntimeException::class, 'IndexNow key is not configured.')
    ;
});

it('throws when no config exists for host', function (): void {
    configureIndexNow(function (IndexNowConfig $config): void {
        $config
            ->host('example.com')
            ->key('abcd1234')
            ->domain('other.example.com')
        ;
    });

    $manager = app(IndexNowClientManager::class);

    expect(fn () => $manager->client('example.com'))
        ->toThrow(RuntimeException::class, 'IndexNow is not configured for domain [example.com].')
    ;
});

it('builds a client with the configured endpoint', function (): void {
    configureIndexNow(function (IndexNowConfig $config): void {
        $config
            ->host('example.com')
            ->key('abcd1234')
            ->endpoint(Endpoint::Bing)
        ;
    });

    $mock = new MockClient();
    app()->instance(ClientInterface::class, $mock);

    $client = app(IndexNowClientManager::class)->client('example.com');

    expect($client)->toBeInstanceOf(IndexNowClient::class);

    $client->submit('https://example.com/page');

    $request = $mock->getLastRequest();
    assert($request instanceof RequestInterface);
    expect((string) $request->getUri())->toBe('https://www.bing.com/indexnow');
});
