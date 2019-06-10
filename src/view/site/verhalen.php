<?php include '__navigation.php'?>

<div class="verhalen_grid">

  <?php foreach ($verhalen as $verhaal) {
    if($verhaal['published'] == true) { ?>


<div class="story_box">
      <a class="story_box__link"href="#">
        <?php if($verhaal['type'] == "video") { ?>
          <img width="200" src="./assets/videos/stories/<?php echo $verhaal['text_pic']?>" alt="<?php echo $verhaal['text_pic']?>">
        <?php } ?>

        <?php if($verhaal['type'] == "text") { ?>
          <img width="200" src="./assets/images/stories/<?php echo $verhaal['text_pic']?>" alt="<?php echo $verhaal['text_pic']?>">
        <?php } ?>

        <?php if($verhaal['type'] == "audio") { ?>
          <img width="200" src="./assets/audio/stories/<?php echo $verhaal['text_pic']?>" alt="<?php echo $verhaal['text_pic']?>">
        <?php } ?>
        <div class="box_info">
          <div class="box_info__left">
            <p class="box_info__title"><?php echo $verhaal['story_name'] ?></p>
            <p class="box_info__relates"><?php echo $verhaal['relates'] ?> relates</p>
          </div>
            <div class="box_info__right">
            <p class="box_info__user">by <?php if($verhaal['anonymous'] == 1) { echo "anonymous";} else { echo $verhaal['name'];}?></p>
            <!-- <button class="box_info__button">Relate</button> -->
          </div>
        </div>
      </a>
</div>
    <?php }}  ?>

  </div>
  <!-- <p><?php echo $verhaal['name'] ?></p>
  <p><?php echo $verhaal['email'] ?></p>
  <p><?php echo $verhaal['type'] ?></p>
  <p><?php echo $verhaal['story_name'] ?></p>
  <p><?php echo $verhaal['story_content'] ?></p>
  <p><?php echo $verhaal['published'] ?></p> -->
  <?php include '__footer.php'?>
