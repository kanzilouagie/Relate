<?php if($verhaal['type'] == "text") { ?>
<section>
<form method="POST" enctype="multipart/form-data">
<label for="name">character name</label>
<input type="text" name="char_name" value="<?php echo $verhaal['story_name'] ?>">
<label for="omslagfoto"></label>
<img src="./assets/images/stories/<?php echo $verhaal['text_pic'] ?>" alt="<?php echo $verhaal['text_pic'] ?>">
<label for="story">Story</label>
<textarea name="story" cols="30" rows="10"><?php echo $verhaal['story_content'] ?></textarea>
<button type="submit" name="verwijder">Verwijder</button>
<button type="submit" name="offline">Laat nog offline</button>
<button type="submit" name="publiceer">Publiceer</button>
</form>
</section>

<?php } ?>

<?php if($verhaal['type'] == "video") { ?>
<section>
<form method="POST" enctype="multipart/form-data">
<label for="name">character name</label>
<input type="text" name="char_name" value="<?php echo $verhaal['story_name'] ?>">
<input type="text" name="story" value="<?php echo $verhaal['story_content'] ?>">
<video width="320" height="240" controls>
  <source src="./assets/videos/stories/<?php echo $verhaal['story_content'] ?>" type="video/mp4">
</video>
<button type="submit" name="verwijder">Verwijder</button>
<button type="submit" name="offline">Laat nog offline</button>
<button type="submit" name="publiceer">Publiceer</button>
</form>
</section>

<?php } ?>

<?php if($verhaal['type'] == "audio") { ?>
<section>
<form method="POST" enctype="multipart/form-data">
<label for="name">character name</label>
<input type="text" name="char_name" value="<?php echo $verhaal['story_name'] ?>">
<input type="text" name="story" value="<?php echo $verhaal['story_content'] ?>">
<audio controls>
<source src="./assets/audio/stories/<?php echo $verhaal['story_content'] ?>" type="audio/mpeg">
</audio>
<button type="submit" name="verwijder">Verwijder</button>
<button type="submit" name="offline">Laat nog offline</button>
<button type="submit" name="publiceer">Publiceer</button>
</form>
</section>

<?php } ?>
