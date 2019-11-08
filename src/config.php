<?php
/**
 * +----------------------------------------------------------------------
 * | think-jump [基于 thinkphp6]
 * +----------------------------------------------------------------------
 *  .--,       .--,             | FILE: config.php
 * ( (  \.---./  ) )            | AUTHOR: byron
 *  '.__/o   o\__.'             | EMAIL: xiaobo.sun@qq.com
 *     {=  ^  =}                | QQ: 150093589
 *     /       \                | DATETIME: 2019/11/4 14:52
 *    //       \\               |
 *   //|   .   |\\              |
 *   "'\       /'"_.-~^`'-.     |
 *      \  _  /--'         `    |
 *    ___)( )(___               |-----------------------------------------
 *   (((__) (__)))              | 高山仰止,景行行止.虽不能至,心向往之。
 * +----------------------------------------------------------------------
 * | Copyright (c) 2019 http://www.zzstudio.net All rights reserved.
 * +----------------------------------------------------------------------
 */
declare(strict_types=1);

return [
    // 默认成功 code
    'default_success_code'  => 0,
    // 默认失败 code
    'default_error_code'    => 1,
    // 默认输出类型
    'default_return_type'   => 'html',
    // 默认AJAX 数据返回格式,可选json xml ...
    'default_ajax_return'   => 'json',
    // 默认跳转页面对应的模板文件
    'dispatch_success_tpl'  => app()->getRootPath().'/vendor/zzstudio/think-jump/src/tpl/dispatch_jump.tpl',
    'dispatch_error_tpl'    => app()->getRootPath().'/vendor/zzstudio/think-jump/src/tpl/dispatch_jump.tpl',
];
