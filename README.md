<h1 align="center">hyperf http client</h1>

<p align="center">
<a href="https://packagist.org/packages/webguosai/hyperf-http-client"><img src="https://poser.pugx.org/webguosai/hyperf-http-client/v/stable" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/webguosai/hyperf-http-client"><img src="https://poser.pugx.org/webguosai/hyperf-http-client/downloads" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/webguosai/hyperf-http-client"><img src="https://poser.pugx.org/webguosai/hyperf-http-client/v/unstable" alt="Latest Unstable Version"></a>
<a href="https://packagist.org/packages/webguosai/hyperf-http-client"><img src="https://poser.pugx.org/webguosai/hyperf-http-client/license" alt="License"></a>
</p>

## 运行环境

- php >= 8.1
- composer
- hyperf >= 3.1

## 安装

```bash
composer require webguosai/hyperf-http-client -vvv
```

## 配置
### 发布配置

```bash
php bin/hyperf.php vendor:publish webguosai/hyperf-http-client
```

配置文件

```php
return [
    // 超时 (单位秒，-1表示不超时)
    'timeout'       => 3.0,

    // 代理ip
    // http：127.0.0.1:9527 或 http://127.0.0.1:9527
    // https：https://127.0.0.1:9527
    // socks5：socks5://127.0.0.1:9527
    'proxy'         => '',

    // 重定向 (-1表示无限制，默认不重定向)
    'redirect'      => 0,

    // 保存cookie的文件路径
    'cookieJarFile' => '',
];
```

## 使用

### 发送请求

- **写法一**

```php
use Webguosai\HyperfHttpClient\Facade\HttpClient;

// facade 写法
$response = HttpClient::request($url, $method, $data, $headers);

$response = HttpClient::get($url, $query, $headers);
$response = HttpClient::post($url, $data, $headers);
$response = HttpClient::put($url, $data, $headers);
$response = HttpClient::patch($url, $data, $headers);
$response = HttpClient::delete($url, $data, $headers);
$response = HttpClient::head($url, $data, $headers);
$response = HttpClient::options($url, $data, $headers);
```

- **写法二**

```php
use function \Webguosai\HyperfHttpClient\http;

$response = http()->request($url, $method, $data, $headers);

$response = http()->get($url, $query, $headers);
$response = http()->post($url, $data, $headers);
$response = http()->put($url, $data, $headers);
$response = http()->patch($url, $data, $headers);
$response = http()->delete($url, $data, $headers);
$response = http()->head($url, $data, $headers);
$response = http()->options($url, $data, $headers);
```

- **写法三**

```php
/** @var $http \Webguosai\HttpClient\Contract\HttpClientInterface * */
$http = di(\Webguosai\HttpClient\Contract\HttpClientInterface::class);

$response = $http->request($url, $method, $query, $headers);
$response = $http->get($url, $query, $headers);
$response = $http->post($url, $data, $headers);
$response = $http->put($url, $data, $headers);
$response = $http->patch($url, $data, $headers);
$response = $http->delete($url, $data, $headers);
$response = $http->head($url, $data, $headers);
$response = $http->options($url, $data, $headers);
```

### 实操

```php
/** @var $throw \Webguosai\HttpClient\Exception\RequestException **/
[$status, $throw] = $response->ok();
if ($status) {
    var_dump($response->getBody());
    var_dump($response->json());
} else {
    var_dump($throw->getMessage()); // 错误内容
    var_dump($throw->getRequestArgs()); // 请求前的传参
    var_dump($throw->getContext()); // 上下文 信息
    var_dump($throw->getErrorType()); // 错误类型
    var_dump($throw->getHttpStatusCode()); // http 状态码
    var_dump($throw->getCurlErrorCode()); // curl 错误码
}
```

## 文档

https://github.com/webguosai/http-client-v2

## License

MIT
