<?php include '__navigation.php'?>

<p>audio</p>

<section>
<form method="POST" enctype="multipart/form-data">
<label for="name">character name</label>
<input type="text" name="char_name">
<label for="file">file</label>
<input type="file" name="file">
<label for="name">full name</label>
<input type="text" name="fullname">
<label for="name">email</label>
<input type="email" name="email">
<button type="submit" name="submit">Upload Audio</button>
</form>
</section>
