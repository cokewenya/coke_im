<?php

//版本检测
if (version_compare(PHP_VERSION, '7.0', '<')) {
    throw new Swoole\ExitException('请使用PHP7.0及以上版本');
}

//项目根目录
define('__ROOT__', realpath(__DIR__));

//debug
define("DE_BUG", true);

//自动加载
require_once __DIR__ . '/vendor/autoload.php';

//框架入口
require_once __ROOT__ . "/vendor/SooCoke/start.php";

//开始运行
new SooCoke\start();
