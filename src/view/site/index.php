<?php include '__navigation.php' ?>
<script>
$(document).ready( function() {

// Default 2nd list to bottom
$('#list2').scrollTop($('#list2')[0].scrollHeight);

// Get scrollable height for both lists
var list1Height = $('#list1')[0].scrollHeight;
var list2Height = $('#list2')[0].scrollHeight;

// When list 1 is scrolled....
$('#list1').scroll( function() {

  // Calculate current offset % for list1 (being scrolled by user)
  // and new offset % for list2 (scroll position adjusted with this script)
  var list1Offset = ( $(this).scrollTop() + $(this).height() ) / list1Height;
  var list2Offset = 1 - list1Offset;
  var list2Position = list2Height * list2Offset;

  // Set new scrolll position for list2
  $('#list2').scrollTop(list2Position);
});

});</script>

<section class="fold">
  <div class="fold_black">
  <div class="fold_text">
      <h1>Opera & Ballet Saai?</h1>
      <div class="vr_text">
        <div class="vr_responsive">&nbsp;</div>
        <p class="subtext">Opera stukken duren te lang, zijn saai of vertellen ons verhalen waarmee we ons niet verbinden </p>
      </div>
      <p class="copytext">Opera stukken duren te lang, zijn saai of vertellen ons verhalen waarmee we ons niet verbinden Opera stukken duren te lang, zijn saai of vertellen ons verhalen waarmee we ons niet verbinden Opera stukken duren te lang, zijn saai of vertellen ons verhalen waarmee we ons niet verbinden Opera stukken duren te lang, ons niet verbinden </p>
      <p>Kan je niet wachten? </p>
      <button></button>
    </div>
    <img class="fold_black_img" src="./assets/images/header_Home.png" alt="" >
  </div>

  <div class="fold_red">
    <img class="fold_red_img" src="./assets/images/header_Home2.png" alt="" >
    <div class="scroll-container">
      <div class="scroll-btn">
        <span class="mouse">
          <span class="mouse-ball">
          </span>
        </span>
      </div>
      <p class="scroll_text">scroll</p>
    </div>
  </div>
</section>

<section class="stats">
  <div class="stats_image">
   <img class="stats_image_red" src="./assets/images/stats_image.png" alt="" >
  </div>
  <div class="stats_text">
    <p>3 Upload methodes</p>
    <div class="vr">&nbsp;</div>
    <p>4 Two-tales</p>
    <div class="vr">&nbsp;</div>
    <p><?php echo count($verhalen);?> Eigen Verhalen</p>
  </div>
</section>

<section class="twotale_flex">
<div id="list1" class="disable-scrollbars">
  <div class="gutter">
    <img src="./assets/images/twotales/twotales_01_left01.png" alt="" >
  </div>
  <div class="gutter">
  <img src="./assets/images/twotales/twotales_01_left01.png" alt="" >
  </div>
  <div class="gutter">
  <img src="./assets/images/twotales/twotales_01_left01.png" alt="" >
  </div>
</div>

<div id="list2" class="disable-scrollbars">
      <div class="gutter">
          <img src="./assets/images/twotales/twotales_01_right01.png" alt="" >
      </div>
      <div class="gutter">
          <img src="./assets/images/twotales/twotales_01_right01.png" alt="" >
      </div>
      <div class="gutter">
          <img src="./assets/images/twotales/twotales_01_right01.png" alt="" >
      </div>
</div>
</section>

<section class="twotales_link">
  <div class="twotales_link_text">

  </div>
  <div class="twotales_link_button">
    <button> let's go!</button>
  </div>
</section>

<section class="upload_manieren">
  <div class="upload_manieren_flex">
  <h1>EN NU... Is HET AAN JOU.</h1>
  <p class="subtext">Nu is het tijd om ons jouw verhaal te vertellen.</p>
  <div class="upload_manieren_container">
    <div class="upload_manier">
      <img  src="./assets/images/upload_manieren_write.png" alt="" height="150px">
      <div class="vr_responsive">&nbsp;</div>
      <div>
        <h2>Schrijf jou verhaal</h2>
        <p>Schrijf op je eigen manier jou verhaal. Vertel ons op een verhalende wijze een gebeurtenis uit jou leven.</p>
      </div>
    </div>
    <div class="upload_manier">
    <img  src="./assets/images/upload_manieren_video.png" alt="" height="150px" >
    <div class="vr_responsive">&nbsp;</div>
      <div>
        <h2>Schrijf jou verhaal</h2>
        <p>Schrijf op je eigen manier jou verhaal. Vertel ons op een verhalende wijze een gebeurtenis uit jou leven.</p>
      </div>
    </div>
    <div class="upload_manier">
    <img  src="./assets/images/upload_manieren_spraak.png" alt="" height="150px">
    <div class="vr_responsive">&nbsp;</div>
      <div>
        <h2>Schrijf jou verhaal</h2>
        <p>Schrijf op je eigen manier jou verhaal. Vertel ons op een verhalende wijze een gebeurtenis uit jou leven.</p>
      </div>
    </div>
  </div>
  </div>
</section>


<?php include '__footer.php'?>
