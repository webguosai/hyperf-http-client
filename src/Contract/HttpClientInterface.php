<?php

declare(strict_types=1);

namespace Webguosai\HyperfHttpClient\Contract;

/**
 * Http客户端
 * @method self get(string $url, array $query = [], string|array $headers = [])
 * @method self post(string $url, string|array $data = [], string|array $headers = [])
 * @method self put(string $url, string|array $data = [], string|array $headers = [])
 * @method self patch(string $url, string|array $data = [], string|array $headers = [])
 * @method self delete(string $url, string|array $data = [], string|array $headers = [])
 * @method self head(string $url, string|array $data = [], string|array $headers = [])
 * @method self options(string $url, string|array $data = [], string|array $headers = [])
 * @method self request(string $url, string $method, string|array $data = [], string|array $headers = [])
 */
interface HttpClientInterface
{
}
