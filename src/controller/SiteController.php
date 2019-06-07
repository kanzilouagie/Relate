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
    $this->set('title','TwoTales');

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
            echo $fileSize;
            if($fileSize < 200000000) {
              $fileNameNew = uniqid('', true).".".$fileActualExt;
              $fileDestination = "./assets/img/stories/videos/".$fileName;
              move_uploaded_file($fileTmpName, $fileDestination);
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
}
