<?php
return array(
	//'配置项'=>'配置值'
	'DB_TYPE'   => 'mysql', // 数据库类型
 	'DB_HOST'   => 'localhost', // 服务器地址
 	'DB_NAME'   => 'tpadmin', // 数据库名
 	'DB_USER'   => 'root', // 用户名
 	'DB_PWD'    => '123456', // 密码
 	'DB_PORT'   => 3306, // 端口
 	'DB_PREFIX' => '', // 数据库表前缀
    // 'DEFAULT_THEME' => 'default',
 	'DEFAULT_CONTROLLER' => 'Post',
 	'show_page_trace'=>false,

 	'TMPL_PARSE_STRING' => array(
        '__STATIC__' => __ROOT__.'/Application/'.MODULE_NAME.'/View/' . '/Public/static',),




);
