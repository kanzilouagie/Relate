<?php include '__navigation.php'?>

<section class="black-bg">
<div class="backrgound_tabbar">
  <div class="tabbar">
    <a class="tabbartitle" href="index.php?page=text_upload">Schrijf het</a>
    <a class="tabbartitle" href="index.php?page=audio_upload">neem het op</a>
    <a class="tabbartitle activebro" href="index.php?page=video_upload">film het</a>
  </div>
</div>
<form autocomplete="off" class="form-flex" method="POST" enctype="multipart/form-data">
<input class="hidden">
<div>
    <div>
      <label class="titlelabel" for="char_name">De titel van mijn verhaal is</label>
      <input class="inputtitle" type="text" name="char_name">
    </div>
    <div>
      <label class="namelabel" for="name">Gemaakt door</label>
      <input class="inputname" type="text" name="fullname">
    </div>
    <p class="textforadd">Begin met je verhaal door even de personages aan te kaarten en jouw eigen verhaal te situeren.</p>
  </div>
  <div class="upload-btn-wrapper">
      <input class="addfilebtn" type="file" name="file">
      <button class="filebtnreplace inverse">Kies een Video</button>
  </div>

  <div class="mailanonym">
  <div>
  <div class="upload-btn-wrapper">
      <input class="addfilebtn" type="file" name="file_image">
      <button class="filebtnreplace">Kies een omslagfoto</button>
    </div>
    <div>
      <label class="maillabel" for="email">email</label>
      <input class="inputname inputmail" type="email" name="email">
    </div>

  </div>
  <div class="checkandsub">
    <div>
      <input type="checkbox" name="anonymous" value="1">
      <label class="textforadd" for="anonymous">Ik wil dit anoniem publiceren</label>
    </div>
    <button class="addtextbtn" type="submit" name="submit">TELL YOUR STORY</button>
  </div>
</form>
</section>
<?php include '__footer.php'?>
