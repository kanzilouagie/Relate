<?php include '__navigation.php'?>

<section class="video_upload">
<div class= "login_wrapper">
    <h1>Upload video</h1>
<div class= "login-form">
<form method="POST" enctype="multipart/form-data">
<label for="name">character name</label>
<input placeholder='Karakter naam' type="text" name="char_name">

<div class="box">
	<input type="file" name="file" id="file" class="inputfile inputfile-4" data-multiple-caption="{count} files selected" multiple />
	<label for="file"><figure><svg xmlns="http://www.w3.org/2000/svg" width="20" height="17" viewBox="0 0 20 17"><path d="M10 0l-5.2 4.9h3.3v5.1h3.8v-5.1h3.3l-5.2-4.9zm9.3 11.5l-3.2-2.1h-2l3.4 2.6h-3.5c-.1 0-.2.1-.2.1l-.8 2.3h-6l-.8-2.2c-.1-.1-.1-.2-.2-.2h-3.6l3.4-2.6h-2l-3.2 2.1c-.4.3-.7 1-.6 1.5l.6 3.1c.1.5.7.9 1.2.9h16.3c.6 0 1.1-.4 1.3-.9l.6-3.1c.1-.5-.2-1.2-.7-1.5z"/></svg></figure> <span>Upload a video&hellip;</span></label>
</div>

<label for="name">full name</label>
<input type="text" name="fullname">
<label for="name">email</label>
<input placeholder='E-mail' type="email" name="email">
<div class= "login_radio">
  <input type="radio" name="anonymous" value="0" checked>
  <label for="anonymous">ik wil dit publiceren onder mijn naam</label>
</div>
<div class= "login_radio">
  <input type="radio" name="anonymous" value="1">
  <label for="anonymous">ik wil dit anoniem publiceren</label>
</div>
<button class='sb' type="submit" name="submit">Upload Video</button>
</form>
</div>
</div>
</section>
<?php include '__footer.php'?>
