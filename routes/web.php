<?php

use App\Controllers\UserController;
use Symfony\Component\Routing\Route;
use Symfony\Component\Routing\RouteCollection;



// Routes system
$routes = new RouteCollection();
$routes->add('home', new Route(constant('URL_SUBFOLDER') . '/', array('controller' => 'HomeController', 'method' => 'index'), array()));
$routes->add('problemset', new Route(constant('URL_SUBFOLDER') . '/problemset', array('controller' => 'HomeController', 'method' => 'indexProblemset'), array()));
$routes->add('user', new Route(constant('URL_SUBFOLDER') . '/user/register', array('controller' => 'UserController', 'method' => 'index'), array()));
// $routes->add('api_post_edit', '/api/posts/{id}')
//   ->controller([BlogApiController::class, 'edit'])
//   ->methods(['PUT']);
