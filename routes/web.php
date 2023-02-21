<?php

use App\Controllers\UserController;
use Symfony\Component\Routing\Route;
use Symfony\Component\Routing\RouteCollection;



// Routes system
$routes = new RouteCollection();
$routes->add('home', new Route(constant('URL_SUBFOLDER') . '/', array('controller' => 'HomeController', 'method' => 'index'), array()));
$routes->add('problemset', new Route(constant('URL_SUBFOLDER') . '/problemset', array('controller' => 'HomeController', 'method' => 'indexProblemset'), array()));
$routes->add('leaderboard', new Route(constant('URL_SUBFOLDER') . '/leaderboard', array('controller' => 'HomeController', 'method' => 'indexLeaderboard'), array()));
$routes->add('submissions', new Route(constant('URL_SUBFOLDER') . '/submissions', array('controller' => 'HomeController', 'method' => 'indexSubmissions'), array()));
$routes->add('create', new Route(constant('URL_SUBFOLDER') . '/create', array('controller' => 'HomeController', 'method' => 'indexCreate'), array()));
$routes->add('ide', new Route(constant('URL_SUBFOLDER') . '/ide', array('controller' => 'HomeController', 'method' => 'indexIDE'), array()));
$routes->add('debugger', new Route(constant('URL_SUBFOLDER') . '/debugger', array('controller' => 'HomeController', 'method' => 'indexDebugger'), array()));
$routes->add('user', new Route(constant('URL_SUBFOLDER') . '/user/register', array('controller' => 'UserController', 'method' => 'index'), array()));
$routes->add('registration', new Route(constant('URL_SUBFOLDER') . '/registration', array('controller' => 'HomeController', 'method' => 'indexRegistration'), array()));
// $routes->add('api_post_edit', '/api/posts/{id}')
//   ->controller([BlogApiController::class, 'edit'])
//   ->methods(['PUT']);
