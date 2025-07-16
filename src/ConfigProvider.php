<?php

declare(strict_types=1);

namespace Webguosai\HyperfHttpClient;

use Webguosai\HyperfHttpClient\Contract\HttpClientInterface;

class ConfigProvider
{
    public function __invoke(): array
    {
        return [
            'dependencies' => [
                HttpClientInterface::class => HttpClientFactory::class,
            ],
            'publish'      => [
                [
                    'id'          => 'config',
                    'description' => 'hyperf http client',
                    'source'      => __DIR__ . '/../publish/http_client.php',
                    'destination' => BASE_PATH . '/config/autoload/http_client.php',
                ],
            ],
        ];
    }
}
