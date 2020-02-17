<?php
// +----------------------------------------------------------------------
// | SentCMS [ WE CAN DO IT JUST THINK IT ]
// +----------------------------------------------------------------------
// | Copyright (c) 2013 http://www.tensent.cn All rights reserved.
// +----------------------------------------------------------------------
// | Author: molong <molong@tensent.cn> <http://www.tensent.cn>
// +----------------------------------------------------------------------

return [
	// 权限设置
	'auth_config' => [
		'auth_on' => true, // 认证开关
		'auth_type' => 1, // 认证方式，1为实时认证；2为登录认证。
		'auth_group' => 'auth_group', // 用户组数据表名
		'auth_group_access' => 'auth_group_access', // 用户-用户组关系表
		'auth_rule' => 'auth_rule', // 权限规则表
		'auth_user' => 'admin', // 用户信息表
	],
];