<?php
// +----------------------------------------------------------------------
// | darker [ 不要用于商业用途 ]
// +----------------------------------------------------------------------
// | Copyright (c) 2016 51zhibo.top All rights reserved.
// +----------------------------------------------------------------------
// | Author: 51zhibo.top <>
// +----------------------------------------------------------------------
return array(
    // 路由配置
    'URL_ROUTER_ON'   => true,
    'URL_MAP_RULES'   => array(
    ),
    'URL_ROUTE_RULES' => array(
        'page/:id\d'   => 'nav/page',
        'lists/:cid\d' => 'nav/lists',
        'post/:id\d'   => 'nav/post',
    ),
);
