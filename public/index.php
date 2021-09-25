<?php
require_once __DIR__ . './../vendor/autoload.php';
//use eftec\bladeone\BladeOne;
//
//$views = __DIR__ . '/views';
//$cache = __DIR__ . '/cache';
//$blade = new BladeOne($views,$cache,BladeOne::MODE_DEBUG);


use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel;
use Symfony\Component\HttpKernel\Controller\ArgumentResolver;
use Symfony\Component\HttpKernel\Controller\ControllerResolver;
use Symfony\Component\Routing;


$request = Request::createFromGlobals();
$routes = include __DIR__ . './../config/routes.php';

$context = new Routing\RequestContext();
$matcher = new Routing\Matcher\UrlMatcher($routes, $context);

$controllerResolver = new ControllerResolver();
$argumentResolver = new ArgumentResolver();

$framework = new Ozone\Framework($matcher, $controllerResolver, $argumentResolver);
$response = $framework->handle($request);

$response->send();


//try
//{
//    $route = new Router(new YamlFileLoader(new FileLocator(array(__DIR__))),'config/routes.yaml');
//    $routes = $route->getRouteCollection();
//
//    $routes->add('blog', new Route('blog', ['_controller' => BlogController::class]));
//
//    // Init RequestContext object
//    $context = new RequestContext();
//    $context->fromRequest(Request::createFromGlobals());
//
//    // Init UrlMatcher object
//    $matcher = new UrlMatcher($routes, $context);
//
//    // Find the current route
//    $parameters = $matcher->match($context->getPathInfo());
//
//    $url = $matcher->getContext();
//
//    echo '<pre>';
//    print_r($parameters);
//
//    echo 'Generated URL: <br>' ; print_r($url);
//    exit;
//}
//catch (ResourceNotFoundException $e)
//{
//    echo $e->getMessage();
//}
//    echo $blade->run("hello",array("variable1"=>"value1")); // it calls /views/hello.blade.php

