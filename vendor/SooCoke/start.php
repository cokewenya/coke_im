<?php

namespace SooCoke;

use SooCoke\request\request;

/**
 * 系统核心文件
 * * */
class start {

    private $server;
    private $request;
    private $response;

    public function __construct($is_swoole = false) {
        return $this->server();
    }

    public function server() {
        //尝试获取路由
        $all = request::make();
        echo 123;
    }

}
