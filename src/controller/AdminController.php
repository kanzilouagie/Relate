<?php

require_once __DIR__ . '/Controller.php';
require_once __DIR__ . '/../dao/AdminDAO.php';

class AdminController extends Controller{

  function __construct(){
  }

  public function index(){
    $this->set('title','admin login');
    if(!empty($_POST['action'])) {
      if($_POST['action'] === 'login') {
        $adminDAO = new AdminDAO();
        $data['username'] = $_POST['username'];
        $user = $adminDAO->checkLogin($data);
        if(password_verify($_POST['password'], $user['password']) == 1) {
          $_SESSION['logged_in'] = true;
          header('Location: index.php?page=logged_in');
        } else {
          $_SESSION['logged_in'] = false;
        }
        }
      }
  }

  public function logged_in(){
    if(!isset($_SESSION['logged_in']) || !($_SESSION['logged_in'])) {
      header('Location: index.php?page=admin');
    }
    $this->set('title','admin');
    $adminDAO = new AdminDAO();
    if(isset($_POST['action'])) {
      if($_POST['action'] === 'register') {
        $data = array(
          'username' => $_POST['username'],
          'password' => password_hash($_POST['password'], PASSWORD_DEFAULT)
        );
        $adminDAO->insert($data);
      }
    }

    if(isset($_GET['actie'])) {
      session_destroy();
      header('Location: index.php?page=admin');
    }
  }

  public function twotales(){
    $this->set('title','TwoTales');
  }

}
