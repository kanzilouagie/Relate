<?php include '__navigation.php'?>

<p>video</p>

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
<input type="radio" name="anonymous" value="0" checked>
<label for="anonymous">ik wil dit publiceren onder mijn naam</label>
<input type="radio" name="anonymous" value="1">
<label for="anonymous">ik wil dit anoniem publiceren</label>
<button type="submit" name="submit">Upload Video</button>
</form>
</section>
<?php include '__footer.php'?>
