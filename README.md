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
    // 超时
    'timeout'       => 3,

    // 代理
    'proxy_socks5'  => false, // 是否使用 socks5
    'proxy'         => '', // 代理ip，如：0.0.0.0:8888

    // 允许重定向及重定向次数
    'redirects'     => false,
    'maxRedirect'   => 5,

    // 保存cookie的文件路径
    'cookieJarFile' => '',
];
```

## 使用

### 发送请求

- 写法一

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

- **写法二**

```php
/** @var $http \Webguosai\HyperfHttpClient\Contract\HttpClientInterface * */
$http = di(\Webguosai\HyperfHttpClient\Contract\HttpClientInterface::class);

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
    var_dump($throw->getMessage());
    var_dump($throw->getErrorType());
    var_dump($throw->getCode());
}
```

## 文档

https://github.com/webguosai/http-client-v2

## License

MIT
