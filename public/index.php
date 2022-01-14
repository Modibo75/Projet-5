<?php
require '../vendor/autoload.php';
define('DEBUG_TIME', microtime(true));

$whoops = new \Whoops\Run;
$whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
$whoops->register();

if (isset($_GET['page']) && $_GET['page'] === '1') {
    $url = explode('?', $_SERVER['REQUEST_URI'])[0];
    unset($_GET['page']);
    $query = http_build_query($_GET);
    $url = $url . (empty($query) ? '' : '?' . $query);
    header('Location: ' . $url);
    http_response_code(301);
    exit();
}


$router= new App\Router(dirname(__DIR__).'/views');
$router
->get('/blog', 'post/index', 'home')
->get('/blog/category/[*:slug]-[i:id]', 'category/show', 'category')
->get('/blog/[*:slug]-[i:id]', 'post/show', 'post')

->run();



