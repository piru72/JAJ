<?php

namespace App\Controllers;

use Symfony\Component\Routing\RouteCollection;




class HomeController
{
  // Homepage action
  public function index(RouteCollection $routes)
  {
    require_once APP_ROOT . '/public/home.php';
  }
  public function indexProblemset(RouteCollection $routes)
  {
    require_once APP_ROOT . '/public/problemset.php';
  }
}
