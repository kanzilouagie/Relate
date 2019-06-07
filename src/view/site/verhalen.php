<?php include '__navigation.php'?>

<h1>verhalen</h1>

<div class="verhalen_grid">

  <?php foreach ($verhalen as $verhaal) {
    if($verhaal['published'] == true) { ?>

  <div class="boxke">
  <p><?php echo $verhaal['name'] ?></p>
  <p><?php echo $verhaal['email'] ?></p>
  <p><?php echo $verhaal['type'] ?></p>
  <p><?php echo $verhaal['story_name'] ?></p>
  <p><?php echo $verhaal['story_content'] ?></p>
  <p><?php echo $verhaal['published'] ?></p>
  </div>
    <?php }}  ?>

  </div>
