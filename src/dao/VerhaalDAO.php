<?php

require_once(__DIR__ . '/DAO.php');

class VerhaalDAO extends DAO{

  public function selectAll(){
    $sql = "SELECT * FROM `verhalen` ORDER BY `id` ASC";
    $stmt = $this->pdo->prepare($sql);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
  }
  public function selectById($id){
    $sql = "SELECT * FROM `verhalen` WHERE `id` = :id";
    $stmt = $this->pdo->prepare($sql);
    $stmt->bindValue(':id', $id);
    $stmt->execute();
    return $stmt->fetch(PDO::FETCH_ASSOC);
  }

  public function insert($data){
    $errors = $this->validate($data);
    var_dump($errors);
    if(empty($errors)){
      $sql = "INSERT INTO `verhalen` (`name`,`email`, `type`, `story_name`, `story_content`, `published`, `relates`, `anonymous`) VALUES (:name, :email, :type, :story_name, :story_content, :published, :relates, :anonymous)";
      $stmt = $this->pdo->prepare($sql);
      $stmt->bindValue(':name', $data['name']);
      $stmt->bindValue(':email', $data['email']);
      $stmt->bindValue(':type', $data['type']);
      $stmt->bindValue(':story_name', $data['story_name']);
      $stmt->bindValue(':story_content', $data['story_content']);
      $stmt->bindValue(':published', $data['published']);
      $stmt->bindValue(':relates', $data['relates']);
      $stmt->bindValue(':anonymous', $data['anonymous']);
      if($stmt->execute()){
        return $this->selectById($this->pdo->lastInsertId());
      }
    }
    return false;
  }

  public function update($id, $data) {
    $sql = "  UPDATE `verhalen` SET `story_name` = :story_name, `story_content` = :story_content, `published` = :published WHERE `id` = :id";
    $stmt = $this->pdo->prepare($sql);
    $stmt->bindValue(':id', $id);
    $stmt->bindValue(':story_name', $data['story_name']);
    $stmt->bindValue(':story_content', $data['story_content']);
    $stmt->bindValue(':published', $data['published']);
    $stmt->execute();
    return $stmt->fetch(PDO::FETCH_ASSOC);
  }

  public function delete($id) {
    $sql = "DELETE FROM `verhalen` WHERE `id` = :id";
    $stmt = $this->pdo->prepare($sql);
    $stmt->bindValue(':id', $id);
    $stmt->execute();
    return $stmt->fetch(PDO::FETCH_ASSOC);
    }


  public function validate($data){
    $errors = [];
    if(!isset($data['name'])){
      $errors['name'] = 'Gelieve een name door te sturen';
    }
    if(empty($data['email'])){
      $errors['email'] = 'Gelieve een email door te sturen';
    }
    if(empty($data['type'])){
      $errors['type'] = 'Gelieve een type door te sturen';
    }
    if(empty($data['story_name'])){
      $errors['story_name'] = 'Gelieve een story_name door te sturen';
    }
    if(empty($data['story_content'])){
      $errors['story_content'] = 'Gelieve een story_content door te sturen';
    }
    if(empty($data['published'])){
      $errors['published'] = 'Gelieve een published door te sturen';
    }

    return $errors;
  }

}


?>
