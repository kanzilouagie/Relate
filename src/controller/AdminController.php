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

    if(isset($_POST['action'])) {
      if($_POST['action'] === 'upload') {
        $errormessage = "<div class='errors'>";
        $target_dir = "./assets/img/evenementen/";
        $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
        $uploadOk = 1;
        $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
      $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
      if($check !== false) {
          $uploadOk = 1;
      } else {
          $errormessage .= "File is not an image, ";
          $uploadOk = 0;
      }
  }

        // Check if file already exists
        if (file_exists($target_file)) {

          $errormessage .= "File already exists. ";
          $uploadOk = 0;
        }

        // Check file size
        if ($_FILES["fileToUpload"]["size"] > 100000000) {

          $errormessage .= "too large. ";
          $uploadOk = 0;
        }

        // Allow certain file formats
        if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        && $imageFileType != "gif" && $imageFileType != "JPG"&& $imageFileType != "PNG" && $imageFileType != "JPEG"
        && $imageFileType != "GIF" ) {

          $errormessage .= "Only photo's allowed";
            $uploadOk = 0;
        }

        // Check if $uploadOk is set to 0 by an error
        if ($uploadOk == 0) {

          $errormessage .= "</div>";
          echo $errormessage;
        // if everything is ok, try to upload file
        } else {
          if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
            $data = array(
              'link' => $_POST['link'],
              'src' => basename($_FILES["fileToUpload"]["name"]),
              'boxtype' => $_POST['boxtype']
            );
            $eventsDAO->insert($data);

            $message = "<div class='info'>The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.</div>";
            header("Refresh:2; url=index.php?page=logged_in");
            echo $message;
          } else {
            echo '';
          }
        }
    }

    if(isset($_GET['id'])) {
      $dir = "./assets/img/evenementen/";
      $id = $_GET['id'];
      $dir2 = $eventsDAO->selectByName($id);
      foreach($dir2 as $dire) {
        $result = $dir . $dire;
        unlink($result);
      }

      $eventsDAO->delete($id);
      $_SESSION['message'] = 'Error!';
      header("Refresh:2; url=index.php?page=logged_in");
      echo "<div class='info'>Je evenement is succesvol verwijderd</div>";
    }
  }

  public function twotales(){
    $this->set('title','TwoTales');
  }

}
