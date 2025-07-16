<?php

declare(strict_types=1);

namespace Webguosai\HyperfHttpClient;

use Hyperf\Context\ApplicationContext;
use Webguosai\HyperfHttpClient\Contract\HttpClientInterface;

if (!function_exists('Webguosai\HyperfHttpClient\http')) {
    /**
     * 获取APP应用请求实例.
     */
    function http(): HttpClientInterface
    {
        $container = ApplicationContext::getContainer();

        return $container->get(HttpClientInterface::class);
    }
}