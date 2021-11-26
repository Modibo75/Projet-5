<?php

use Router\Router;

require '../vendor/autoload.php';
require'../route/Router.php';

$router = new Router($_GET['url']);


$router->get('/', 'App\Controllers\BlogController@index');
$router->get('/posts/:id', 'BlogController@show');

$router->run();

