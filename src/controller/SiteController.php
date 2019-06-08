<?php

require_once __DIR__ . '/Controller.php';
require_once __DIR__ . '/../dao/VerhaalDAO.php';

class SiteController extends Controller{

  function __construct(){
  }

  public function index(){
    $this->set('title','Relate');
  }

  public function verhalen(){
    $verhaalDAO = new VerhaalDAO();
    $verhalen = $verhaalDAO->selectAll();
    $this->set('verhalen', $verhalen);
    $this->set('title','Verhalen');
  }

  public function twotales(){
    $verhaalDAO = new VerhaalDAO();
    $this->set('title','TwoTales');

  }

  public function video_upload() {
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
            $data = array(
              'name' => $_POST['fullname'],
              'email' => $_POST['email'],
              'type' => "video",
              'story_name' => $_POST['char_name'],
              'story_content' => $fileName,
              'published' => "false"
            );
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
  }
  }

  public function audio_upload() {
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
            $data = array(
              'name' => $_POST['fullname'],
              'email' => $_POST['email'],
              'type' => "audio",
              'story_name' => $_POST['char_name'],
              'story_content' => $fileName,
              'published' => "false"
            );
            $verhaalDAO->insert($data);
            header("Location: index.php?page=twotales");
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



}
