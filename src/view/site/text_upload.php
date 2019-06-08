<?php include '__navigation.php'?>

<p>text</p>

<section>
<form method="POST" enctype="multipart/form-data">
<label for="name">character name</label>
<input type="text" name="char_name">
<label for="story">Story</label>
<textarea name="story" cols="30" rows="10"></textarea>
<label for="name">full name</label>
<input type="text" name="fullname">
<label for="name">email</label>
<input type="email" name="email">
<button type="submit" name="submit">Upload Text</button>
</form>
</section>
<?php include '__footer.php'?>
