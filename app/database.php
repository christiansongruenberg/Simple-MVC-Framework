<?php
/**
 * Created by PhpStorm.
 * User: Christianson
 * Date: 19/12/2015
 * Time: 11:47 PM
 */

use Illuminate\Database\Capsule\Manager as Capsule;

$capsule = new Capsule();

$capsule->addConnection([
   'driver' => 'mysql',
    'host' => '127.0.0.1',
    'username' => 'root',
    'password' => '',
    'database' => 'mvc',
    'charset' => 'utf8',
    'collation' => 'utf8_unicode_ci',
    'prefix' => ''
]);

$capsule->bootEloquent();