<?php
// +----------------------------------------------------------------------
// | OneThink [ WE CAN DO IT JUST THINK IT ]
// +----------------------------------------------------------------------
// | Copyright (c) 2013 http://www.onethink.cn All rights reserved.
// +----------------------------------------------------------------------
// | Author:  
// +----------------------------------------------------------------------

/**
 * 安装程序配置文件
 */
define ( 'INSTALL_APP_PATH', realpath ( './' ) . '/' );

return array (
		
		// URL配置
		'URL_CASE_INSENSITIVE' => true, // 默认false 表示URL区分大小写 true则表示不区分大小写
		'URL_MODEL' => 3, // URL模式 使用兼容模式安装
		
		'ORIGINAL_TABLE_PREFIX' => 'wp_', // 默认表前缀
		
		/* 模板相关配置 */
		'TMPL_PARSE_STRING' => array (
				'__STATIC__' => __ROOT__ . '/Public/static',
				'__ADDONS__' => __ROOT__ . '/Public/' . MODULE_NAME . '/Addons',
				'__IMG__' => __ROOT__ . '/Public/' . MODULE_NAME . '/img',
				'__CSS__' => __ROOT__ . '/Public/' . MODULE_NAME . '/css',
				'__JS__' => __ROOT__ . '/Public/' . MODULE_NAME . '/js' 
		) 
);