<?php

use Illuminate\Database\Capsule\Manager as Capsule;

$capsule =new Capsule;

$capsule->addConnection([
'driver'=>$app->config->get('db.driver'),
'host'=>$app->config->get('db.host'),
'database'=>$app->config->get('db.database'),
'username'=>$app->config->get('db.username'),
'password'=>$app->config->get('db.password'),
'charset'=>$app->config->get('db.charset'),
'collation'=>$app->config->get('db.collation'),
'prefix' => $app->config->get('db.prefix')




	]);


/*$db_conx = mysqli_connect("localhost", "rohit", "rohit", "studentdb");
// Evaluate the connection
if (mysqli_connect_errno()) {
    echo mysqli_connect_error();
    exit();
} else {
	echo "Successfull database connection, happy coding!!!";
}*/