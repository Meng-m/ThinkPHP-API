<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2016 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------

return [
    //'/' => 'index/user/home',
    '/'     =>  'index/user/home',
    'sample'=>  'api/index/sample',
    'login' =>  'index/user/login',
    'logout' =>  'index/user/logout',
    'create'=>  'index/user/create',
    'map'   =>  'api/map/index',
    '__pattern__' => [
        'name' => '\w+',
    ],
    '[home]'     => [
      //  ':id'   => ['index/hello', ['method' => 'get'], ['id' => '\d+']],
      //  ':name' => ['index/hello', ['method' => 'post']],
    ],
    'hello/[:name]' =>['index/index/hello',['method' => 'get', 'ext' => 'html']],
    
    //'home' =>['index/user/home',['method' => 'get']],
    // 定义闭包
   // 'hello/[:name]' => function ($name) {
   //     return 'Hello, 闭包' . $name . '!';
  //  }, 
    'today/[:year]/[:month]' =>['index/index/today',['method'=>'get'],['year'=>'\d{4}','month'=>'\d{2}']],
];













