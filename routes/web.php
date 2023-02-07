<?php 
use Symfony\Component\Routing\Route;
use Symfony\Component\Routing\RouteCollection;



// Routes system
$routes = new RouteCollection();
$routes->add('user', new Route(constant('URL_SUBFOLDER') . '/user/register', array('controller' => 'UserController', 'method'=>'index'), array()));