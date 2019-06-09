<?php

require_once __DIR__ . '/Controller.php';
require_once __DIR__ . '/../dao/AdminDAO.php';
require_once __DIR__ . '/../dao/VerhaalDAO.php';

class AdminController extends Controller{

  function __construct(){
  }

  public function index(){
    $this->set('backgroundcolor', '');
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
    if(isset($_GET['actie'])) {
      session_destroy();
      header('Location: index.php?page=admin');
    }
    $verhaalDAO = new VerhaalDAO();
    $verhalen = $verhaalDAO->selectAll();
    $this->set('verhalen', $verhalen);
    $this->set('backgroundcolor', 'class="adminbg"');
  }

  public function edit(){
    $this->set('title','edit story');
    $verhaalDAO = new VerhaalDAO();
    $id = $_GET['id'];
    $verhaal = $verhaalDAO->selectById($id);
    $this->set('verhaal', $verhaal);
    $this->set('backgroundcolor', 'class="adminbg"');

    if(isset($_POST['verwijder'])) {
      $id = $_GET['id'];
      if($verhaal['type'] == "text") {
        $dir2 = $verhaal['text_pic'];
        $dir = "./assets/images/stories/";
      } else if($verhaal['type'] == "video") {
        $dir2 = $verhaal['story_content'];
        $dir = "./assets/videos/stories/";
      } else if($verhaal['type'] == "audio") {
        $dir2 = $verhaal['story_content'];
        $dir = "./assets/audio/stories/";
      }
        $result = $dir . $dir2;
        unlink($result);
      $verhaalDAO->delete($id);
      header("Location: index.php?page=logged_in");
    }






    if(isset($_POST['offline'])) {
      $data = array(
        'story_name' => $_POST['char_name'],
        'story_content' => $_POST['story'],
        'published' => "false",
      );
      $verhaalDAO->update($id, $data);
      header("Location: index.php?page=logged_in");

    }

    if(isset($_POST['publiceer'])) {
      $data = array(
        'story_name' => $_POST['char_name'],
        'story_content' => $_POST['story'],
        'published' => 1
      );
      $verhaalDAO->update($id, $data);
      header("Location: index.php?page=logged_in");

    }



  }

  public function addadmin() {
    if(!isset($_SESSION['logged_in']) || !($_SESSION['logged_in'])) {
      header('Location: index.php?page=admin');
    }
    $this->set('title','Add Administrator');
    $this->set('backgroundcolor', 'class="adminbg"');
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

  public function alleinzendingen(){
    if(!isset($_SESSION['logged_in']) || !($_SESSION['logged_in'])) {
      header('Location: index.php?page=admin');
    }
    $this->set('title','Alle Inzendingen');
    $this->set('backgroundcolor', 'class="adminbg"');
    if(isset($_GET['actie'])) {
      session_destroy();
      header('Location: index.php?page=admin');
    }
    $verhaalDAO = new VerhaalDAO();
    $verhalen = $verhaalDAO->selectAll();
    $this->set('verhalen', $verhalen);
  }

  public function gepubliceerd(){
    if(!isset($_SESSION['logged_in']) || !($_SESSION['logged_in'])) {
      header('Location: index.php?page=admin');
    }
    $this->set('title','Gepubliceerde Inzendingen');
    $this->set('backgroundcolor', 'class="adminbg"');
    if(isset($_GET['actie'])) {
      session_destroy();
      header('Location: index.php?page=admin');
    }
    $verhaalDAO = new VerhaalDAO();
    $verhalen = $verhaalDAO->selectAll();
    $this->set('verhalen', $verhalen);
  }

}
