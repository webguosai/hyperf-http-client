<?php

declare(strict_types=1);

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