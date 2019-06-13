<?php include '__navigation.php'?>

<section class="black-bg">
<div class="backrgound_tabbar">
  <div class="tabbar">
    <a class="tabbartitle activebro" href="index.php?page=text_upload">Schrijf het</a>
    <a class="tabbartitle" href="index.php?page=audio_upload">Neem het  op</a>
    <a class="tabbartitle" href="index.php?page=video_upload">film het</a>
  </div>
</div>
<form autocomplete="off" class="form-flex" method="POST" enctype="multipart/form-data">
<input class="hidden">
  <div>
    <label class="titlelabel" for="char_name"><span class="outline">Hi,</span> mijn verhaal heet</label>
    <input class="inputtitle" type="text" name="char_name">
  </div>

  <div>
    <label class="namelabel" for="name">Door</label>
    <input class="inputname" type="text" name="fullname">
  </div>

  <p class="textforadd">Begin met je verhaal door even de personages aan te kaarten en jouw eigen verhaal te situeren.</p>

  <label class="maillabel" for="story">Jouw Verhaal</label>
  <textarea class="textareainput" placeholder="Er was eens..." name="story" cols="30" rows="10"></textarea>

  <div class="mailanonym">
  <div>
    <div>
      <label class="maillabel" for="email">email</label>
      <input class="inputname inputmail" type="email" name="email">
    </div>
    <div class="upload-btn-wrapper">
      <input class="addfilebtn" type="file" name="file">
      <button class="filebtnreplace">Kies een foto</button>
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

