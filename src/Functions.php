<?php

declare(strict_types=1);

namespace Webguosai\HyperfHttpClient;

use Hyperf\Context\ApplicationContext;
use Webguosai\HttpClient\Response;
use Webguosai\HyperfHttpClient\Contract\HttpClientInterface;

if (!function_exists('Webguosai\HyperfHttpClient\http')) {
    /**
     * 获取http client实例
     */
    function http(): Response
    {
        $container = ApplicationContext::getContainer();

        return $container->get(HttpClientInterface::class);
    }
}