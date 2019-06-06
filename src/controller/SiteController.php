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
  }

}
