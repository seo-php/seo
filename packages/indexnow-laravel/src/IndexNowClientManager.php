<?php

declare(strict_types=1);

namespace Seo\IndexNow\Laravel;

use Illuminate\Contracts\Foundation\Application;
use Psr\Http\Client\ClientInterface;
use RuntimeException;
use Seo\IndexNow\Endpoint;
use Seo\IndexNow\IndexNowClient;

final class IndexNowClientManager
{
    public function __construct(
        private IndexNowConfigRegistry $registry,
        private Application $app,
        private ?ClientInterface $client = null,
    ) {}

    public function client(?string $domain = null): IndexNowClient
    {
        $config = $this->registry->resolve($domain ?? '');

        if ($config === null) {
            throw new RuntimeException("IndexNow is not configured for domain [{$domain}].");
        }

        if ($config->host === '') {
            throw new RuntimeException('IndexNow host is not configured.');
        }

        if ($config->key === '') {
            throw new RuntimeException('IndexNow key is not configured.');
        }

        return IndexNowClient::create(
            host: $config->host,
            key: $config->key,
            keyLocation: $config->keyLocation,
            endpoint: $config->endpoint ?? Endpoint::Global,
            client: $this->client,
        );
    }
}
