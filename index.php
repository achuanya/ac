<?php

/**
 * 启动文件
 * @author: 阿川 ahuan@achuan.io
 * @Time: 2019/02/21 19:01
 */


// 设置页面编码
header('Content-type: text/html; charset=utf-8');

// 应用目录为当前目录
define('APP_PATH', __DIR__ . '/');

// 开启调试模式
define('APP_DEBUG', true);

// 加载框架文件
require(APP_PATH . 'acphp/Acphp.php');

// 加载配置文件
$config = require(APP_PATH . 'config/config.php');

// 实例化框架类
(new acphp\Acphp($config))->run();
