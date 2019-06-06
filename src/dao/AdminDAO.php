<?php

require_once(__DIR__ . '/DAO.php');

class AdminDAO extends DAO{

  public function selectById($id){
    $sql = "SELECT * FROM `Admin` WHERE `id` = :id";
    $stmt = $this->pdo->prepare($sql);
    $stmt->bindValue(':id', $id);
    $stmt->execute();
    return $stmt->fetch(PDO::FETCH_ASSOC);
  }

  public function insert($data){
    $errors = $this->validate($data);
    if(empty($errors)){
      if($this->checkExist($data['username']) === 0) {
      $sql = "INSERT INTO `Admin` (`username`,`password`) VALUES (:username, :password)";
      $stmt = $this->pdo->prepare($sql);
      $stmt->bindValue(':username', $data['username']);
      $stmt->bindValue(':password', $data['password']);
      if($stmt->execute()){
        return $this->selectById($this->pdo->lastInsertId());
      }
  }

    }
    return false;
  }

  public function checkLogin($data) {
    $errors = $this->validateLogin($data);
    if(empty($errors)){
    $sql = "SELECT * FROM `Admin` WHERE `username` = :username";
    $stmt = $this->pdo->prepare($sql);
    $stmt->bindValue(':username', $data['username']);
    $stmt->execute();
    return $stmt->fetch(PDO::FETCH_ASSOC);
  }
  }

  public function delete($id) {
    $sql = "DELETE FROM `verhalen` WHERE `id` = :id";
    $stmt = $this->pdo->prepare($sql);
    $stmt->bindValue(':id', $id);
    $stmt->execute();
    return $stmt->fetch(PDO::FETCH_ASSOC);
  }

  public function checkExist($username) {
    $sql = "SELECT 1 FROM Admin WHERE username = :username";
    $stmt = $this->pdo->prepare($sql);
    $stmt->bindValue(':username', $username);
    $stmt->execute();
    $rowcount = $stmt->rowCount();
    return $rowcount;
  }


  public function validate($data){
    $errors = [];
    if(empty($data['username'])){
      $errors['username'] = 'Gelieve een username door te sturen';
    }
    if(empty($data['password'])){
      $errors['password'] = 'Gelieve een password door te sturen';
    }

    return $errors;
  }

  public function validateLogin($data){
    $errors = [];
    if(empty($data['username'])){
      $errors['username'] = 'Gelieve een username door te sturen';
    }


    return $errors;
  }

}


?>
