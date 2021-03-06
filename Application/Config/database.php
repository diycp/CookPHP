<?php

/**
 * 数据库配制
 */
return[
    //数据库驱动 Mysqli，Mssql，Pgsql，Sqlite，Db2  已弃用 mysql
    'driver' => 'mysqli',
    //是否长连接
    'persistent' => true,
    //服务器
    'host' => 'localhost',
    //账号
    'username' => 'root',
    //密码
    'password' => 'safe520',
    //数据库
    'database' => 'shop',
    //表前缀
    'prefix' => 'c_',
    //数据表引擎
    'engine' => 'InnoDB',
    //模式
    'schema' => 'public',
    //端口
    'port' => 3306,
    //指定使用的 socket 或者命名通道
    'socket' => null,
    //连接参数
    'flags' => MYSQLI_CLIENT_COMPRESS,
    //是否查询缓存
    'cache' => false,
    //数据库缓存驱动
    'cachedriver' => 'file',
    //缓存时间
    'cacheexpire' => 'h',
    //编码
    'charset' => 'utf8',
    //数据库时区
    'timezone' => '+8:00',
];
