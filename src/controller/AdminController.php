<?php

require_once __DIR__ . '/Controller.php';
require_once __DIR__ . '/../dao/AdminDAO.php';

class AdminController extends Controller{

  function __construct(){
  }

  public function index(){
    $this->set('title','admin login');
  }

  public function logged_in(){
    $this->set('title','admin');
    $adminDAO = new AdminDAO();
    if(!empty($_POST['action'])) {
      if($_POST['action'] === 'login') {
      $data['login'] = $_POST['login'];
      $data['password'] = $_POST['password'];
          $admin = $adminDAO->checkLogin($data);
          if($admin === 1) {
            $_SESSION['logged_in'] = true;
            header('Location: index.php?page=logged_in');
          } else {
            $_SESSION['logged_in'] = false;
          }
        }
    }
  }

  public function twotales(){
    $this->set('title','TwoTales');
  }

}
