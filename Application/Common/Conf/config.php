<?php
return array(
    /*模块相关配置*/
    'MODULE_ALLOW_LIST'   => array ('Home','Admin'),
    'DEFAULT_MODULE'      => 'Home',
    
    /*调试工具*/
    'SHOW_PAGE_TRACE'     =>true,//页面调试工具

    /*数据库配置*/
    'DB_TYPE'   => 'mysql', // 数据库类型
    'DB_HOST'   => '127.0.0.1', // 服务器地址
    'DB_NAME'   => 'think_lvxf', // 数据库名
    'DB_USER'   =>  'root', // 用户名
    'DB_PWD'    =>  '', // 密码
    'DB_PORT'   => '3306', // 端口
    'DB_PREFIX' => 'lv_', // 数据库表前缀
    
    /* 用户相关设置 */
    'USER_MAX_CACHE'     => 1000, //最大缓存用户数
    'USER_ADMINISTRATOR' => 1, //管理员用户ID
    
    /*url配置*/
    'URL_MODEL'  =>  2,  // 0 (普通模式); 1 (PATHINFO 模式); 2 (REWRITE  模式); 3 (兼容模式)  默认为PATHINFO 模式
    
    


);