<?php

return[
	'app'=>[
		'url' => 'http://localhost',
		'hash' => [
					'algo'=> PASSWORD_BCRYPT,
					'cost'=> 10
					]
			],
	'db'=> [
			'driver'=>'mysql',
			'host'=>'127.0.0.1',
			'name'=>'site',
			'username'=>'root',
			'password'=>'root',
			'charset'=>'utf8',
			'collation'=>'utf8_unicode_ci',
			'prefix' => ''
			],
	'mail'=>[
			'smtp_auth'=>true,
			'smtp_secure'=>'tls',
			'host'=>'smtp.gmail.com',
			'username'=>'amitbidwai.26@gmail.com',
			'password'=>'sanjeevani',
			'port'=>587,
			'html'=>true
			],
	'auth'=> [
				'session'=>'user_id',
				'remember'=>'user-r'
				],
	'twig'=>[
			'debbug'=>true
			],
	'csrf'=>[
			'session'=>'csrf_token'
	]
];