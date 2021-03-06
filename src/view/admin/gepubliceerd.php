<?php include '__navigation.php'?>
<main>
  <section class="admin__top_header">
  <button class="toggle_menu"><img src="./assets/images/menu_button.png" alt="menu button"></button>
    <a href="#">Nieuwe inzendingen</a>
    <a class="submitform" href="index.php?page=logged_in&actie=loguit"><span class="logout_text">Uitloggen</span></a>
  </section>

  <section class="dashboard_main storyitems">
    <?php foreach ($verhalen as $verhaal) {
    if($verhaal['published'] == true) { ?>
      <div class="dashboard_item">
      <img src="./assets/<?php
        if($verhaal['type'] == "video") {
          echo "videos/stories/".$verhaal['text_pic'];
        }
        else if($verhaal['type'] == "audio") {
           echo "audio/stories/".$verhaal['text_pic'];
        } else if($verhaal['type'] == "text") {
           echo "images/stories/".$verhaal['text_pic'];
        }?>" width="100" alt="">
        <p class="dashboard_item__name"><?php echo $verhaal['name'] ?></p>
        <p class="dashboard_item__type"><?php echo $verhaal['type'] ?></p>
        <a class="dashboard_item__button" href="index.php?page=edit&id=<?php echo $verhaal['id'] ?>">Bekijk inzending</a>
      </div>
    <?php }}  ?>

  </section>
</main>
</div>
