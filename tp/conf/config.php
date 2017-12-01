<?php
/**
 * Created by PhpStorm.
 * User: yangshen
 * Date: 2017/11/29
 * Time: 22:59
 */

return [
    'myname'=> 'yshen',
    'myphone'=>'13567370952',
    // 入口自动绑定模块
    'auto_bind_module'       => false,

    'url_route_on'           => true,
    // 路由使用完整匹配
    'route_complete_match'   => false,


    'id'             => '',
    // SESSION_ID的提交变量,解决flash上传跨域
    'var_session_id' => '',
    // SESSION 前缀
    'prefix'         => 'think',
    // 驱动方式 支持redis memcache memcached
    'type'           => '',
    // 是否自动开启 SESSION
    'auto_start'     => true,

];