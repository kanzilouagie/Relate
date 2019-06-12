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
      <h1>Can you <br> <span>relate</span></h1>
      <div class="vr_text">
        <div class="vr_responsive">&nbsp;</div>
        <p class="subtext">Je denkt misschien dat Opera & Ballet jou niet raakt, dan heb je het goed mis!</p>
      </div>
      <div class="cant_wait">
        <p>Kan je niet wachten? </p>
        <button>ontdek waarom <img width="8px" src="./assets/images/arrow.svg" alt=""></button>
      </div>
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
      <div class="scroll_lines">
        <div class="vr_of_line">&nbsp;</div>
        <p class="scroll_text">SCROLL</p>
        <div class="vr_of_line">&nbsp;</div>
      </div>

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
  <div class="twotale_text">
      <h2>MADAM BUTTERFLY</h2>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora et eveniet in hic ipsum corporis dolores quis iste omnis enim id dolorum, excepturi culpa adipisci soluta sunt itaque quia a.</p>
    </div>
    <img src="./assets/images/twotales/twotales_01_left01.png" alt="" >
  </div>
  <div class="gutter">
  <div class="twotale_text">
      <h2>MADAM BUTTERFLY</h2>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora et eveniet in hic ipsum corporis dolores quis iste omnis enim id dolorum, excepturi culpa adipisci soluta sunt itaque quia a.</p>
    </div>
  <img src="./assets/images/twotales/twotales_01_left01.png" alt="" >
  </div>
  <div class="gutter">
<div class="twotale_text">
      <h2>MADAM BUTTERFLY</h2>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora et eveniet in hic ipsum corporis dolores quis iste omnis enim id dolorum, excepturi culpa adipisci soluta sunt itaque quia a.</p>
    </div>
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

<section class="upload_manieren">
  <div class="upload_manieren_flex">

  <div class="can_you_relate">
    <div><p class="">Nu zie je dat verhalen uit <span>opera & ballet</span> niet zo ver weg liggen.</p></div>
    <div>
      <h2>Can you</h2>
      <h2 class="h2_relate">Relate?</h2>
    </div>
    <div><p class="">Voel je je betrokken? <span>Dan is het tijd om ons jouw verhaal te vertellen </span>adv. onderstaande upload methodes.</p>
    </div>
    </div>

      <div class="upload_manieren_container">
        <div class="upload_manier_logo_text">
          <img  src="./assets/images/relate_Schrijven.png" alt="" height="150px">
          <p class="upload_manier_logo_subtext">Schrijf het</p>
        </div>

        <div  class="vr_of">
          <div class="vr_of_line">&nbsp;</div>
          <p>OF</p>
          <div class="vr_of_line">&nbsp;</div>
        </div>

        <div class="upload_manier_logo_text">
          <img  src="./assets/images/relate_Opnemen.png" alt="" height="150px">
          <p class="upload_manier_logo_subtext">Schrijf het</p>
        </div>

        <div  class="vr_of">
          <div class="vr_of_line">&nbsp;</div>
          <p>OF</p>
          <div class="vr_of_line">&nbsp;</div>
        </div>

        <div class="upload_manier_logo_text">
          <img  src="./assets/images/relate_filmen.png" alt="" height="150px">
          <p class="upload_manier_logo_subtext">Schrijf het</p>
        </div>

      </div>
  </div>
</section>


<?php include '__footer.php'?>
