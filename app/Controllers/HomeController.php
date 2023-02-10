<?php

namespace App\Controllers;

use Symfony\Component\Routing\RouteCollection;




class HomeController
{
  // Homepage action
  public function index()
  {
    require_once APP_ROOT . '/public/home.php';
  }
}
