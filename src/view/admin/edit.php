<?php include '__navigation.php'?>
<main>
  <section class="admin__top_header">
  <button class="toggle_menu">menu</button>
    <p class="kruimelpad"><a href="index.php?page=logged_in">Detailinformatie</a> -
      <?php echo $verhaal['name'] ?>(<?php echo $verhaal['email'] ?>)</p>
    <a class="submitform" href="index.php?page=logged_in&actie=loguit">Uitloggen</a>
  </section>

  <section class="dashboard_main">

    <?php if($verhaal['type'] == "text") { ?>
    <section>
      <form class="dashboard_flex" method="POST" enctype="multipart/form-data">
        <div class="dashboard_item edit">
          <img
            src="./assets/images/<?php if($verhaal['text_pic'] == "video" || $verhaal['text_pic'] == "audio") {  echo "default.png"; } else { echo "stories/".$verhaal['text_pic']; }?>"
            width="100" alt="">
          <p class="dashboard_item__name"><?php echo $verhaal['name'] ?></p>
          <p class="dashboard_item__type"><?php echo $verhaal['type'] ?></p>
          <button class="dashboard_item__button publiceer" type="submit" name="publiceer">Publiceer</button>
          <button class="dashboard_item__button offline" type="submit" name="offline">Laat nog offline</button>
          <button class="dashboard_item__button verwijder" type="submit" name="verwijder">Verwijder</button>
        </div>
        <div class="dashboard_item__main">
        <p>Mijn naam is  <input type="text" name="char_name" value="<?php echo $verhaal['story_name'] ?>">, en dit is mijn verhaal:</p>
        <textarea name="story" cols="30" rows="10"><?php echo $verhaal['story_content'] ?></textarea>
        </div>
      </form>
    </section>

    <?php } ?>

    <?php if($verhaal['type'] == "video") { ?>
      <section>
      <form class="dashboard_flex" method="POST" enctype="multipart/form-data">
        <div class="dashboard_item edit">
          <img
            src="./assets/images/<?php if($verhaal['text_pic'] == "video" || $verhaal['text_pic'] == "audio") {  echo "default.png"; } else { echo "stories/".$verhaal['text_pic']; }?>"
            width="100" alt="">
          <p class="dashboard_item__name"><?php echo $verhaal['name'] ?></p>
          <p class="dashboard_item__type"><?php echo $verhaal['type'] ?></p>
          <button class="dashboard_item__button publiceer" type="submit" name="publiceer">Publiceer</button>
          <button class="dashboard_item__button offline" type="submit" name="offline">Laat nog offline</button>
          <button class="dashboard_item__button verwijder" type="submit" name="verwijder">Verwijder</button>
        </div>
        <div class="dashboard_item__main">
        <p>Mijn naam is  <input type="text" name="char_name" value="<?php echo $verhaal['story_name'] ?>">, en dit is mijn verhaal:</p>
        <input class="hidden" type="text" name="story" value="<?php echo $verhaal['story_content'] ?>">
        <video controls>
          <source src="./assets/videos/stories/<?php echo $verhaal['story_content'] ?>" type="video/mp4">
        </video>
        </div>
      </form>
    </section>

    <?php } ?>

    <?php if($verhaal['type'] == "audio") { ?>
      <section>
      <form class="dashboard_flex" method="POST" enctype="multipart/form-data">
        <div class="dashboard_item edit">
          <img
            src="./assets/images/<?php if($verhaal['text_pic'] == "video" || $verhaal['text_pic'] == "audio") {  echo "default.png"; } else { echo "stories/".$verhaal['text_pic']; }?>"
            width="100" alt="">
          <p class="dashboard_item__name"><?php echo $verhaal['name'] ?></p>
          <p class="dashboard_item__type"><?php echo $verhaal['type'] ?></p>
          <button class="dashboard_item__button publiceer" type="submit" name="publiceer">Publiceer</button>
          <button class="dashboard_item__button offline" type="submit" name="offline">Laat nog offline</button>
          <button class="dashboard_item__button verwijder" type="submit" name="verwijder">Verwijder</button>
        </div>
        <div class="dashboard_item__main">
        <p>Mijn naam is  <input type="text" name="char_name" value="<?php echo $verhaal['story_name'] ?>">, en dit is mijn verhaal:</p>
        <input class="hidden" type="text" name="story" value="<?php echo $verhaal['story_content'] ?>">
        <audio controls>
          <source src="./assets/audio/stories/<?php echo $verhaal['story_content'] ?>" type="audio/mpeg">
        </audio>
        </div>
      </form>
    </section>

    <?php } ?>
  </section>
</main>
</div>
