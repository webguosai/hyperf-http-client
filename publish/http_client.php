<?php

declare(strict_types=1);

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