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
  public function indexLeaderboard(RouteCollection $routes)
  {
    require_once APP_ROOT . '/public/leaderboard.php';
  }
  public function indexSubmissions(RouteCollection $routes)
  {
    require_once APP_ROOT . '/public/submissions.php';
  }
  public function indexCreate(RouteCollection $routes)
  {
    require_once APP_ROOT . '/public/createProblem.php';
  }
  public function indexIDE(RouteCollection $routes)
  {
    require_once APP_ROOT . '/public/ide.php';
  }
  public function indexDebugger(RouteCollection $routes)
  {
    require_once APP_ROOT . '/public/debugger.php';
  }
}
