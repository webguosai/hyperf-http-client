<?php

declare(strict_types=1);

namespace Webguosai\HyperfHttpClient\Contract;

use Webguosai\HttpClient\Response;

/**
 * Http客户端
 * @method Response get(string $url, array $query = [], string|array $headers = [])
 * @method Response post(string $url, string|array $data = [], string|array $headers = [])
 * @method Response put(string $url, string|array $data = [], string|array $headers = [])
 * @method Response patch(string $url, string|array $data = [], string|array $headers = [])
 * @method Response delete(string $url, string|array $data = [], string|array $headers = [])
 * @method Response head(string $url, string|array $data = [], string|array $headers = [])
 * @method Response options(string $url, string|array $data = [], string|array $headers = [])
 * @method Response request(string $url, string $method, string|array $data = [], string|array $headers = [])
 */
interface HttpClientInterface
{
}
