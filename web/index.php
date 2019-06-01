<?php
require_once './../vendor/autoload.php';
require_once './inc/pages.inc.php';

$dispatcher = FastRoute\simpleDispatcher(function (FastRoute\RouteCollector $r) {
  $r->addRoute('GET', '/', 'getFrontPage');
  $r->addRoute('GET', '/explore', 'getExplorePage');
});

$httpMethod = $_SERVER['REQUEST_METHOD'];
$uri = $_SERVER['REQUEST_URI'];

if (FALSE !== $pos = strpos($uri, '?')) {
  $uri = substr($uri, 0, $pos);
}
$uri = rawurldecode($uri);

$routeInfo = $dispatcher->dispatch($httpMethod, $uri);
switch ($routeInfo[0]) {
  case FastRoute\Dispatcher::FOUND:
    $handler = $routeInfo[1];
    $vars = $routeInfo[2];
    call_user_func_array($handler, $vars);
    break;

  default:
    // Fall back to the front page.
    getPage('front');
    break;
}
