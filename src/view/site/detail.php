<?php include '__navigation.php'?>
<main>
  <section class="main_detail">
  <button class="toggle_menu hidden"></button>
  <a class="back_button" href="index.php?page=verhalen">Ga terug.</a>
    <article class="article_detail">

    <?php if($verhaal['type'] == "text") { ?>
      <img class="article_detail__image" src="./assets/images/stories/<?php echo $verhaal['text_pic']; ?>" alt="<?php echo $verhaal['text_pic']; ?>" width="200">
    <?php } ?>

      <?php if($verhaal['type'] == "audio") { ?>
        <span class="hidden waveform_content"><?php echo $verhaal['story_content'] ?></span>
        <input type="button" id="btn-play" />
        <div id="audio-spectrum"></div>
      <?php } ?>

      <?php if($verhaal['type'] == "video") { ?>
        <video controls>
          <source src="./assets/videos/stories/<?php echo $verhaal['story_content'] ?>" type="video/mp4">
        </video>
      <?php } ?>

    <p class="detail_info__title"><?php echo $verhaal['story_name'] ?></p>
    <p class="detail_info__auteur"><span class="regular">Gemaakt door: </span><?php echo $verhaal['name'] ?></p>
    <?php if($verhaal['type'] == "text") { ?>
    <p class="detail_info__content"><?php echo $verhaal['story_content'] ?></p>
    <?php } ?>
    <p class="detail_info__relates"><?php echo $verhaal['relates'] ?> anderen kunnen zich in deze situatie vinden. </p>
    <div class="button_flex">
    <form method="POST">
    <button class="box_info__button" type="submit" name="relate">Relate</button>
    </form>
    </div>
    </article>
  </section>
</main>
<?php include '__footer.php'?>
