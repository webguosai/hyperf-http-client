<?php

declare(strict_types=1);

namespace Webguosai\HyperfHttpClient;

use Hyperf\Contract\ConfigInterface;
use Psr\Container\ContainerInterface;
use Webguosai\HttpClient\HttpClient;

class HttpClientFactory
{
    public function __invoke(ContainerInterface $container): HttpClient
    {
        $config = $container->get(ConfigInterface::class);
        $options = $config->get('http_client', [
            'timeout' => 3,
        ]);

        return HttpClient::factory($options);
    }
}