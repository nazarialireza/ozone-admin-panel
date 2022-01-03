<?php
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing;

$routes = new Routing\RouteCollection();

$routes->add('leap_year', new Routing\Route('/is_leap_year/{year}', [
    'year' => null,
    '_controller' => 'Calendar\Controller\LeapYearController::index'
]));

$routes->add('pages', new Routing\Route('/pages/{page}', [
    'page' => "Dashboard",
    '_controller' => 'Controller\PageController::page',
]));
$routes->add('/', new Routing\Route('/', [
    '_controller' => 'Controller\PageController::index',
]));

$routes->add('login', new Routing\Route('login', [
  '_controller' => 'Controller\PageController::login',
]));

return $routes;