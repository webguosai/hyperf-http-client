<?php

declare(strict_types=1);

namespace Webguosai\HyperfHttpClient\Facade;

use Hyperf\Context\ApplicationContext;
use Webguosai\HttpClient\Contract\HttpClientInterface;
use Webguosai\HttpClient\Contract\ResponseInterface;

/**
 * Http客户端
 * @see HttpClientInterface::class
 *
 * @method static ResponseInterface request(string $url, string $method = 'GET', string|array $data = [], string|array $headers = [])
 * @method static ResponseInterface get(string $url, array $query = [], string|array $headers = [])
 * @method static ResponseInterface post(string $url, string|array $data = [], string|array $headers = [])
 * @method static ResponseInterface put(string $url, string|array $data = [], string|array $headers = [])
 * @method static ResponseInterface patch(string $url, string|array $data = [], string|array $headers = [])
 * @method static ResponseInterface delete(string $url, string|array $data = [], string|array $headers = [])
 * @method static ResponseInterface head(string $url, string|array $data = [], string|array $headers = [])
 * @method static ResponseInterface options(string $url, string|array $data = [], string|array $headers = [])
 * @method static self timeout(int|float $timeout)
 * @method static self redirect(int $redirect)
 * @method static self proxy(string $proxy)
 */
class HttpClient
{
    public static function __callStatic($name, $arguments)
    {
        return ApplicationContext::getContainer()->get(HttpClientInterface::class)->{$name}(...$arguments);
    }
}