<?php

require_once __DIR__ . '/Controller.php';
require_once __DIR__ . '/../dao/VerhaalDAO.php';

class SiteController extends Controller{

  function __construct(){
  }

  public function index(){
    $this->set('title','Relate');
    $this->set('backgroundcolor', '');
    $verhaalDAO = new VerhaalDAO();
    $verhalen = $verhaalDAO->selectAll();
    $this->set('verhalen', $verhalen);
    $this->set('activestate','class="active"');
    $relate = $verhaalDAO->selectRelates(rand(1, 3));

    $this->set('relate', $relate);
  }

  public function verhalen(){
    $verhaalDAO = new VerhaalDAO();
    $this->set('title','Verhalen');
    $this->set('backgroundcolor', '');
    $this->set('activestate','class="active"');

    if(!isset($_GET['type'])) {
      $type = '';
    } else {
      $type = $_GET['type'];
    }

    $verhalen = $verhaalDAO->selectAllByRelates($type);

    if(!isset($_GET['sort']) || $_GET['sort'] == "recent") {
      function compare_id($a, $b)
    {
      return strnatcmp($a['id'], $b['id']);
    }
    usort($verhalen, 'compare_id');
    } else {
      function compare_relates($a, $b)
    {
      return strnatcmp($b['relates'], $a['relates']);
    }
    usort($verhalen, 'compare_relates');
    }

    $this->set('verhalen', $verhalen);

    if (strtolower($_SERVER['HTTP_ACCEPT']) == 'application/json') {

      header('Content-Type: application/json');
      $data = array();
      $data['verhalen'] = $verhalen;
      echo json_encode($data);
      exit();
    }
  }

  public function twotales(){
    $verhaalDAO = new VerhaalDAO();
    $this->set('title','TwoTales');
    $this->set('backgroundcolor', '');
    $this->set('activestate','class="active"');

  }

  public function video_upload() {
    $this->set('backgroundcolor', '');
    $verhaalDAO = new VerhaalDAO();
    $this->set('title','Upload video');

    if(isset($_POST['submit'])) {
      $file = $_FILES['file'];
      $fileName = $_FILES['file']['name'];
      $fileTmpName = $_FILES['file']['tmp_name'];
      $fileSize = $_FILES['file']['size'];
      $fileError = $_FILES['file']['error'];
      $fileType = $_FILES['file']['type'];

      $fileExt = explode('.', $fileName);
      $fileActualExt = strtolower(end($fileExt));

      $allowed = array('mp4', 'webm', 'ogg');

      if(in_array($fileActualExt, $allowed)) {
        if($fileError === 0 ) {
          if($fileSize < 200000000) {
            $fileNameNew = uniqid('', true).".".$fileActualExt;
            $fileDestination = "./assets/videos/stories/".$fileName;
            move_uploaded_file($fileTmpName, $fileDestination);
            if(!isset($_POST['anonymous'])) {
              $data['anonymous'] = 0;
            } else {
              $data['anonymous'] = 1;
            }
              $data['name'] = $_POST['fullname'];
              $data['email'] = $_POST['email'];
              $data['type'] = "video";
              $data['story_name'] = $_POST['char_name'];
              $data['story_content'] = $fileName;
              $data['published'] = "false";
              $data['relates'] = 0;
              $data['text_pic'] = "video";
            $fileImg = $_FILES['file_image'];
      $fileNameImg = $_FILES['file_image']['name'];
      $fileTmpNameImg = $_FILES['file_image']['tmp_name'];
      $fileSizeImg = $_FILES['file_image']['size'];
      $fileErrorImg = $_FILES['file_image']['error'];
      $fileTypeImg = $_FILES['file_image']['type'];

      $fileExtImg = explode('.', $fileNameImg);
      $fileActualExtImg = strtolower(end($fileExtImg));

      $allowedImg = array('jpg', 'jpeg', 'png');

      if(in_array($fileActualExtImg, $allowedImg)) {
        if($fileErrorImg === 0 ) {
          if($fileSizeImg < 200000000) {
            $fileNameNewImg = uniqid('', true).".".$fileActualExtImg;
            $fileDestinationImg = "./assets/videos/stories/".$fileNameImg;
            move_uploaded_file($fileTmpNameImg, $fileDestinationImg);
            $data['text_pic'] = $fileNameImg;
            $verhaalDAO->insert($data);
            header("Location: index.php?page=twotales");
          } else {
            echo "file is too big";
          }
        } else {
          echo "there was an error uploading your file";
        }
      } else {
        echo "upload a mp4 file";
      }
          } else {
            echo "file is too big";
          }
        } else {
          echo "there was an error uploading your file";
        }
      } else {
        echo "upload a mp4 file";
      }
  }
  }

  public function audio_upload() {
    $this->set('backgroundcolor', '');
    $verhaalDAO = new VerhaalDAO();
    $this->set('title','Upload audio');

    if(isset($_POST['submit'])) {
      $file = $_FILES['file'];
      $fileName = $_FILES['file']['name'];
      $fileTmpName = $_FILES['file']['tmp_name'];
      $fileSize = $_FILES['file']['size'];
      $fileError = $_FILES['file']['error'];
      $fileType = $_FILES['file']['type'];

      $fileExt = explode('.', $fileName);
      $fileActualExt = strtolower(end($fileExt));

      $allowed = array('mp3', 'wav');

      if(in_array($fileActualExt, $allowed)) {
        if($fileError === 0 ) {
          if($fileSize < 200000000) {
            $fileNameNew = uniqid('', true).".".$fileActualExt;
            $fileDestination = "./assets/audio/stories/".$fileName;
            move_uploaded_file($fileTmpName, $fileDestination);
            if(!isset($_POST['anonymous'])) {
              $data['anonymous'] = 0;
            } else {
              $data['anonymous'] = 1;
            }
              $data['name'] = $_POST['fullname'];
              $data['email'] = $_POST['email'];
              $data['type'] = "audio";
              $data['story_name'] = $_POST['char_name'];
              $data['story_content'] = $fileName;
              $data['published'] = "false";
              $data['relates'] = 0;
              $data['text_pic'] = "audio";
      $fileImg = $_FILES['file_image'];
      $fileNameImg = $_FILES['file_image']['name'];
      $fileTmpNameImg = $_FILES['file_image']['tmp_name'];
      $fileSizeImg = $_FILES['file_image']['size'];
      $fileErrorImg = $_FILES['file_image']['error'];
      $fileTypeImg = $_FILES['file_image']['type'];

      $fileExtImg = explode('.', $fileNameImg);
      $fileActualExtImg = strtolower(end($fileExtImg));

      $allowedImg = array('jpg', 'jpeg', 'png');

      if(in_array($fileActualExtImg, $allowedImg)) {
        if($fileErrorImg === 0 ) {
          if($fileSizeImg < 200000000) {
            $fileNameNewImg = uniqid('', true).".".$fileActualExtImg;
            $fileDestinationImg = "./assets/audio/stories/".$fileNameImg;
            move_uploaded_file($fileTmpNameImg, $fileDestinationImg);
            $data['text_pic'] = $fileNameImg;
            $verhaalDAO->insert($data);
            header("Location: index.php?page=twotales");
          } else {
            echo "file is too big";
          }
        } else {
          echo "there was an error uploading your file";
        }
      } else {
        echo "upload a mp4 file";
      }
          } else {
            echo "file is too big";
          }
        } else {
          echo "there was an error uploading your file";
        }
      } else {
        echo "upload a mp3 or wav file";
      }
  }
  }

  public function text_upload() {
    $this->set('activestate','class="active"');
    $this->set('backgroundcolor', '');
    $verhaalDAO = new VerhaalDAO();
    $this->set('title','Upload text');

    if(isset($_POST['submit'])) {
      $file = $_FILES['file'];
      $fileName = $_FILES['file']['name'];
      $fileTmpName = $_FILES['file']['tmp_name'];
      $fileSize = $_FILES['file']['size'];
      $fileError = $_FILES['file']['error'];
      $fileType = $_FILES['file']['type'];

      $fileExt = explode('.', $fileName);
      $fileActualExt = strtolower(end($fileExt));

      $allowed = array('jpg', 'jpeg', 'png');

      if(in_array($fileActualExt, $allowed)) {
        if($fileError === 0 ) {
          if($fileSize < 200000000) {
            $fileNameNew = uniqid('', true).".".$fileActualExt;
            $fileDestination = "./assets/images/stories/".$fileName;
            move_uploaded_file($fileTmpName, $fileDestination);
            if(!isset($_POST['anonymous'])) {
              $data['anonymous'] = 0;
            } else {
              $data['anonymous'] = 1;
            }
            $data['name'] = $_POST['fullname'];
              $data['email'] = $_POST['email'];
              $data['type'] = "text";
              $data['story_name'] = $_POST['char_name'];
              $data['story_content'] = $_POST['story'];
              $data['published'] = "false";
              $data['relates'] = 0;
              $data['text_pic'] = $fileName;
            $verhaalDAO->insert($data);
            header("Location: index.php?page=twotales");
          } else {
            echo "file is too big";
          }
        } else {
          echo "there was an error uploading your file";
        }
      } else {
        echo "upload a jpg, jpeg or png file";
      }
  }
  }

  public function detail(){
    $this->set('backgroundcolor', '');
    $this->set('title','detail');
    $verhaalDAO = new VerhaalDAO();
    $id = $_GET['id'];
    $verhaal = $verhaalDAO->selectById($id);
    $this->set('verhaal', $verhaal);
    $boolid = $id . 'relate';
    if(isset($_POST['relate'])) {
      if(!isset($_SESSION[$boolid]) || $_SESSION[$boolid] === false) {
        $verhaalDAO->addRelate($id);
        header("Refresh:0");
        $_SESSION[$boolid] = true;
      }

    }
  }

  public function twotales_detail() {
    $this->set('backgroundcolor', '');
    $relatesDAO = new VerhaalDAO();
    $id = $_GET['id'];
    $relate = $relatesDAO->selectRelates($id);
    $this->set('relate', $relate);
  }



}
