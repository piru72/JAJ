<?php

namespace App\Controllers;

use Symfony\Component\Routing\RouteCollection;




class HomeController
{
  // Homepage action
  public function index(RouteCollection $routes)
  {
    require_once APP_ROOT . '/public/view/pages/home.php';
  }
  public function indexProblemset(RouteCollection $routes)
  {
    require_once APP_ROOT . '/public/view/pages/problemset.php';
  }
  public function indexLeaderboard(RouteCollection $routes)
  {
    require_once APP_ROOT . '/public/view/pages/leaderboard.php';
  }
  public function indexSubmissions(RouteCollection $routes)
  {
    require_once APP_ROOT . '/public/view/pages/submissions.php';
  }
  public function indexCreate(RouteCollection $routes)
  {
    require_once APP_ROOT . '/public/view/pages/createProblem.php';
  }
  public function indexIDE(RouteCollection $routes)
  {
    require_once APP_ROOT . '/public/view/pages/ide.php';
  }
  public function indexDebugger(RouteCollection $routes)
  {
    require_once APP_ROOT . '/public/view/pages/debugger.php';
  }
  public function indexRegistration(RouteCollection $routes)
  {
    require_once APP_ROOT . '/public/view/pages/registration.php';
  }
  public function indexAdmin(RouteCollection $routes)
  {
    require_once APP_ROOT . '/public/view/pages/admin.php';
  }

  public function indexUserProfile(RouteCollection $routes)
  {
    require_once APP_ROOT . '/public/view/pages/userProfile.php';
  }

}
