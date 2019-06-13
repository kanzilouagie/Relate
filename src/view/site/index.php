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

        <p class="subtext">Je denkt misschien dat <span class="highlight">Opera & Ballet</span> jou niet <span class="highlight">raakt</span>, dan heb je het goed <span class="highlight">mis!</span></p>
      </div>
      <div class="cant_wait">

        <a href="index.php?page=twotales"><button>ontdek waarom <img width="8px" src="./assets/images/arrow.svg" alt=""></button>
</a>
      </div>
    </div>
    <img class="fold_black_img" src="./assets/images/header_Home.png" alt="" >

    <div class="social_logos">
    <a class="footer_logos_img" href="https://www.facebook.com/balletvlaanderen">
      <svg width="20px" height="20px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 13.66 27.33"><defs></defs><title>Asset 13</title><g id="Layer_2" data-name="Layer 2"><g id="Layer_1-2" data-name="Layer 1"><path class="cls-1" d="M8.54,9.39V6a1.72,1.72,0,0,1,1.71-1.71H12V0H8.54A5.12,5.12,0,0,0,3.42,5.12V9.39H0v4.27H3.42V27.33H8.54V13.66H12l1.7-4.27Z"/></g></g></svg>
    </a>
    <a class="footer_logos_img" href="https://twitter.com/operaballetvl">
      <svg width="20px" height="20px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 28.58 23.22"><defs></defs><title>Asset 14</title><g id="Layer_2" data-name="Layer 2"><g id="Layer_1-2" data-name="Layer 1"><path class="cls-1" d="M28.58,2.75a12.08,12.08,0,0,1-3.38.92A5.76,5.76,0,0,0,27.78.44a11.64,11.64,0,0,1-3.71,1.41,5.89,5.89,0,0,0-10,5.35A16.63,16.63,0,0,1,2,1.07,5.87,5.87,0,0,0,3.79,8.9a5.86,5.86,0,0,1-2.65-.72v.06A5.89,5.89,0,0,0,5.84,14a5.91,5.91,0,0,1-1.54.19,5.15,5.15,0,0,1-1.11-.1,5.92,5.92,0,0,0,5.48,4.08,11.8,11.8,0,0,1-7.27,2.5A10.75,10.75,0,0,1,0,20.59a16.45,16.45,0,0,0,9,2.63c10.78,0,16.67-8.93,16.67-16.67,0-.26,0-.51,0-.76A11.49,11.49,0,0,0,28.58,2.75Z"/></g></g></svg>  </a>
    <a class="footer_logos_img" href="https://www.instagram.com/balletvlaanderen/">
      <svg width="20px" height="20px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 27.33 27.33"><defs></defs><title>Asset 15</title><g id="Layer_2" data-name="Layer 2"><g id="Layer_1-2" data-name="Layer 1"><path class="cls-1" d="M18.79,0H8.54A8.54,8.54,0,0,0,0,8.54V18.79a8.54,8.54,0,0,0,8.54,8.54H18.79a8.55,8.55,0,0,0,8.54-8.54V8.54A8.54,8.54,0,0,0,18.79,0Zm6,18.79a6,6,0,0,1-6,6H8.54a6,6,0,0,1-6-6V8.54a6,6,0,0,1,6-6H18.79a6,6,0,0,1,6,6Z"/><path class="cls-1" d="M13.66,6.83a6.84,6.84,0,1,0,6.84,6.83A6.83,6.83,0,0,0,13.66,6.83Zm0,11.1a4.27,4.27,0,1,1,4.27-4.27A4.27,4.27,0,0,1,13.66,17.93Z"/><circle class="cls-1" cx="21.01" cy="6.32" r="0.91"/></g></g></svg>  </a>
  </div>
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
    <div>
      <p>Upload methodes:</p>
      <p class="stats_aantal">3</p>
    </div>
    <div class="vr">&nbsp;</div>
    <div>
      <p>Relates:</p>
      <p class="stats_aantal">4</p>
    </div>
    <div class="vr">&nbsp;</div>
    <div>
      <p>Eigen Verhalen:</p>
      <p class="stats_aantal"><?php echo count($verhalen);?></p>
    </div>

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

      <a href="index.php?page=verhalen">Bekijk de andere inzendingen.</a>
  </div>
</section>


<?php include '__footer.php'?>
