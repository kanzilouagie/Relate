<?php include '__navigation.php'?>
<main>
  <section class="admin__top_header">
  <button class="toggle_menu">menu</button>
    <a href="#">Nieuwe inzendingen</a>
    <a class="submitform" href="index.php?page=logged_in&actie=loguit">Uitloggen</a>
  </section>

  <section class="dashboard_main storyitems">
    <?php foreach ($verhalen as $verhaal) { ?>
      <div class="dashboard_item">
        <img src="./assets/images/<?php if($verhaal['text_pic'] == "video" || $verhaal['text_pic'] == "audio") {  echo "default.png"; } else { echo "stories/".$verhaal['text_pic']; }?>" width="100" alt="">
        <p class="dashboard_item__name"><?php echo $verhaal['name'] ?></p>
        <p class="dashboard_item__type"><?php echo $verhaal['type'] ?></p>
        <a class="dashboard_item__button" href="index.php?page=edit&id=<?php echo $verhaal['id'] ?>">Bekijk inzending</a>
      </div>
    <?php }  ?>

  </section>
</main>
</div>
