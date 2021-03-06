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
use think\Route;

Route::rule('news','index/index/news');
Route::rule('members','index/index/members');
Route::rule('publications','index/index/publications');
Route::rule('facilities','index/index/facilities');
Route::rule('auth','index/index/auth');

Route::rule('about_me','index/index/about_me');
Route::rule('rotation','index/index/rotation');
Route::rule('research','index/index/research');
Route::rule('gallery','index/index/gallery');
Route::rule('contact_us','index/index/contact_us');
Route::rule('links','index/index/links');

// Route::rule('member/:id','index/index/member');
// Route::rule('new/:id','index/index/new');
// Route::rule('publication/:id','index/index/publication');
// Route::rule('resea/:id','index/index/resea');

Route::rule('test','index/index/test');
Route::rule('zhindex','index/zhindex/index');


return [
    //别名配置,别名只能是映射到控制器且访问时必须加上请求的方法
    '__alias__'   => [
    ],
    //变量规则
    '__pattern__' => [
    ],
//        域名绑定到模块
//        '__domain__'  => [
//            'admin' => 'admin',
//            'api'   => 'api',
//        ],
];
