<?php
return [
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm'   => '@vendor/npm-asset',
		'@adminlte/widgets' =>  '@vendor/adminlte/yii2-widgets',
    ],
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'components' => [
        'cache' => [
            'class' => 'yii\caching\FileCache',
			
			
        ],
		'authManager' => [
			'class' => 'yii\rbac\PhpManager', // or use 'yii\rbac\DbManager'
		],
    ],
	'modules' => [
		'admin' => [
			'class' => 'mdm\admin\Module',
       
		],
	],
];
