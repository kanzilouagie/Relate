<?php include '__navigation.php'?>

<div class="verhalen_container">

  <div class="eigen_verhalen">
  <div class="verhaal_title">
    <h1>Eigen verhalen</h1>
    <div class="vr_text">
        <div class="vr_responsive">&nbsp;</div>
        <p class="subtext">Eenzelfde kern.</p>
    </div>
  </div>
  <div class="verhalen_filter">
    <form action="index.php" class="filter">
    <input type="hidden" name="page" value="verhalen">
      <input type="radio" name="type" value="" <?php if(!isset($_GET['type']) || $_GET['type'] == "") { echo 'checked'; }?>>
      <label for="type">Alles</label>
      <input type="radio" name="type" value="text" <?php if(!isset($_GET['type']) || $_GET['type'] == "text") { echo 'checked'; }?>>
      <label for="type">Text</label>
      <input type="radio" name="type" value="video" <?php if(!isset($_GET['type']) || $_GET['type'] == "video") { echo 'checked'; }?>>
      <label for="type">Video</label>
      <input type="radio" name="type" value="audio" <?php if(!isset($_GET['type']) || $_GET['type'] == "audio") { echo 'checked'; }?>>
      <label for="type">Audio</label>
      <select name="sort">
        <option value="recent" <?php if(!isset($_GET['sort']) || $_GET['sort'] == "recent") { echo 'selected'; }?>>meest recent</option>
        <option value="relates" <?php if(isset($_GET['sort']) && $_GET['sort'] == "relates") { echo 'selected'; }?>>relates</option>
      </select>
      <input class="filter_submit" type="submit" value="Filter">
    </form>
  </div>
  <div class="verhalen_grid">
<?php foreach ($verhalen as $verhaal) {
  if($verhaal['published'] == true) { ?>

<div class="story_box">
    <a class="story_box__link" href="index.php?page=detail&id=<?php echo $verhaal['id']?>">
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
          <img src="./assets/images/<?php if($verhaal['type'] == "text") {
          echo "upload_manieren_write.png";
           } else  if($verhaal['type'] == "video") {
            echo "upload_manieren_video.png";
             } else  if($verhaal['type'] == "audio") {
              echo "upload_manieren_spraak.png";
               } else  ?>" alt="feather">
          <p class="box_info__user">by <?php if($verhaal['anonymous'] == 1) { echo "anonymous";} else { echo $verhaal['name'];}?></p>
        </div>
      </div>
    </a>
</div>
  <?php }}  ?>

</div>
  </div>

  <div class="verhalen_grid_right">

  </div>

</div>

  <?php include '__footer.php'?>
