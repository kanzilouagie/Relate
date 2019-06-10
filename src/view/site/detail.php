<?php include '__navigation.php'?>
<main>
  <section class="main_detail">
    <article class="article_detail">

    <?php if($verhaal['type'] == "text") { ?>
      <img class="article_detail__image" src="./assets/images/stories/<?php echo $verhaal['text_pic']; ?>" alt="<?php echo $verhaal['text_pic']; ?>" width="200">
    <?php } ?>

      <?php if($verhaal['type'] == "audio") { ?>
        <audio controls>
          <source src="./assets/audio/stories/<?php echo $verhaal['story_content'] ?>" type="audio/mpeg">
        </audio>
      <?php } ?>

      <?php if($verhaal['type'] == "video") { ?>
        <video controls>
          <source src="./assets/videos/stories/<?php echo $verhaal['story_content'] ?>" type="video/mp4">
        </video>
      <?php } ?>

    <p class="detail_info__title"><?php echo $verhaal['story_name'] ?></p>
    <p class="detail_info__auteur"><span class="regular">Gemaakt door: </span><?php echo $verhaal['name'] ?></p>
    <p class="detail_info__content"><?php echo $verhaal['story_content'] ?></p>
    <div class="button_flex">
    <button class="box_info__button">Relate</button>
    </div>
    <p class="detail_info__relates"><?php echo $verhaal['relates'] ?> anderen kunnen zich in deze situatie vinden. </p>
    </article>
  </section>
</main>
<?php include '__footer.php'?>
