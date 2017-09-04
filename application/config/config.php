<?php
$config = [
'HelloPage',
'name' => 'My first web application',
'basePath' => dirname(dirname(__FILE__)),
'vendorPath' => dirname(dirname(dirname(__FILE__))).'/vendor',
'components' => [
    'db' => [
        'class' => 'yii\db\Connection',
        'dsn' => 'mysql:host=localhost;dbname=asteriskcdrdb',
        'username' => 'root',
        'password' => 'passw0rd',
        ],
    ],
    //Другие компоненты YII2:
];
//На этапе разработки нам пригодится дебаговая панель и генератор кода
if (YII_ENV_DEV) {
    $config['bootstrap'][] = 'debug';
    $config['modules']['debug'] = 'yii\debug\Module';

    $config['bootstrap'][] = 'gii';
    $config['modules']['gii'] = 'yii\gii\Module';
}

return $config;