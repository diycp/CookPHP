<?php

/*
 * Cookie配制
 */
return[
    //Cookie 的 名称前缀
    'prefix' => '',
    //Cookie 的 生命周期
    'lifetime' => 7200,
    //Cookie 的作用 域
    'domain' => !filter_var($_SERVER['HTTP_HOST'], FILTER_VALIDATE_IP, FILTER_FLAG_NO_RES_RANGE) ? strstr($_SERVER['HTTP_HOST'], '.') : '',
    //cookie 的有效 路径
    'path' => '/',
    //设置为 true 表示 cookie 仅在使用 安全 链接时可用。
    'secure' => FALSE,
    //设置为 true 表示 PHP 发送 cookie 的时候会使用 httponly 标记
    'httponly' => FALSE,
];
