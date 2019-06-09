<?php
  session_start();
  ini_set('display_errors',true);
  error_reporting(E_ALL);

  $routes = array(
    'home' => array(
      'controller' => 'Site',
      'action' => 'index'
    ),
    'verhalen' => array(
      'controller' => 'Site',
      'action' => 'verhalen'
    ),

    'twotales' => array(
      'controller' => 'Site',
      'action' => 'twotales'
    ),
    'admin' => array(
      'controller' => 'Admin',
      'action' => 'index'
    ),
    'logged_in' => array(
      'controller' => 'Admin',
      'action' => 'logged_in'
    ),
    'video_upload' => array(
      'controller' => 'Site',
      'action' => 'video_upload'
    ),
    'audio_upload' => array(
      'controller' => 'Site',
      'action' => 'audio_upload'
    ),
    'text_upload' => array(
      'controller' => 'Site',
      'action' => 'text_upload'
    ),
    'edit' => array(
      'controller' => 'Admin',
      'action' => 'edit'
    ),
    'addadmin' => array(
      'controller' => 'Admin',
      'action' => 'addadmin'
    ),
    'alleinzendingen' => array(
      'controller' => 'Admin',
      'action' => 'alleinzendingen'
    ),
    'gepubliceerd' => array(
      'controller' => 'Admin',
      'action' => 'gepubliceerd'
    )

    );
  if(empty($_GET['page'])){
    $_GET['page'] = 'home';
  }
  if(empty($routes[$_GET['page']])){
    header('Location: index.php');
    exit();
  }
  $route = $routes[$_GET['page']];
  $controllerName = $route['controller'] . 'Controller';

  require_once __DIR__ . '/controller/' . $controllerName . '.php';

  $controllerObj = new $controllerName();
  $controllerObj->route = $route;
  $controllerObj->filter();
  $controllerObj->render();

