<?php include '__navigation.php'?>
<script>
  $(document).ready(function () {

    // Default 2nd list to bottom
    $('#list2').scrollTop($('#list2')[0].scrollHeight);

    // Get scrollable height for both lists
    var list1Height = $('#list1')[0].scrollHeight;
    var list2Height = $('#list2')[0].scrollHeight;

    // When list 1 is scrolled....
    $('#list1').scroll(function () {

      // Calculate current offset % for list1 (being scrolled by user)
      // and new offset % for list2 (scroll position adjusted with this script)
      var list1Offset = ($(this).scrollTop() + $(this).height()) / list1Height;
      var list2Offset = 1 - list1Offset;
      var list2Position = list2Height * list2Offset;

      // Set new scrolll position for list2
      $('#list2').scrollTop(list2Position);
    });

  });

</script>

<main class="relates_main">


  <section class="twotale_flex">


    <div id="list1" class="disable-scrollbars">
      <div class="gutter gutter_bg_image_left_1">
        <img src="./assets/images/twotales/relates/<?php echo $relate['opera_img1'] ?>" alt="">
        <div class="gutter_text">
          <div class="gutter_title_left_1">
            <h2 class="gutter_text__title"><?php echo $relate['title_opera'] ?></h2>
            <div class="gutter_hr"></div>
          </div>
          <div class="gutter_body_left_1">
            <p class="gutter_text__text"><?php echo $relate['opera_text1'] ?></p>
          </div>
        </div>
      </div>
      <div class="gutter gutter_bg_image_left_2">
        <img src="./assets/images/twotales/relates/<?php echo $relate['opera_img2'] ?>" alt="">
        <div class="gutter_text">
          <div class="gutter_title_left_1">
            <h2 class="gutter_text__title"></h2>
          </div>
          <div class="gutter_body_left_1">
            <p class="gutter_text__text"><?php echo $relate['opera_text2'] ?></p>
          </div>
          <div class="gutter_left_quote">
          <img src="./assets/images/quote_sign.png" alt="quote_sign">
            <p class="quote"><?php echo $relate['story_quote'] ?></p>
          </div>
        </div>
      </div>

      <div class="gutter">
        <img src="./assets/images/twotales/relates/<?php echo $relate['opera_img3'] ?>" alt="">
        <div class="gutter_text">
          <div class="gutter_title_left_1">
            <h2 class="gutter_text__title"></h2>
          </div>
          <div class="gutter_body_left_1">
            <p class="gutter_text__text"><?php echo $relate['opera_text3'] ?></p>
          </div>
        </div>
      </div>
    </div>

    <div id="list2" class="disable-scrollbars">
      <div class="gutter">
        <img src="./assets/images/twotales/relates/<?php echo $relate['story_img3'] ?>" alt="">
        <div class="gutter_text right">
          <div class="gutter_title_right_1">
            <h2 class="gutter_text__title"></h2>
          </div>
          <div class="gutter_body_right_1">
            <p class="gutter_text__text"><?php echo $relate['story_text3'] ?></p>
          </div>
        </div>
      </div>

      <div class="gutter">
        <img src="./assets/images/twotales/relates/<?php echo $relate['story_img2'] ?>" alt="">
        <div class="gutter_text right">
          <div class="gutter_title_right_1">
            <h2 class="gutter_text__title"></h2>
          </div>
          <div class="gutter_body_right_1">
            <p class="gutter_text__text"><?php echo $relate['story_text2'] ?></p>
          </div>
        </div>
      </div>

      <div class="gutter">
        <img src="./assets/images/twotales/relates/<?php echo $relate['story_img1'] ?>" alt="">
        <div class="gutter_text right">
          <div class="gutter_title_right_1">
            <h2 class="gutter_text__title"><?php echo $relate['title_story'] ?></h2>
            <div class="gutter_hr"></div>
          </div>
          <div class="gutter_body_right_1">
            <p class="gutter_text__text"><?php echo $relate['story_text1'] ?></p>
          </div>
          <div class="gutter_right_quote">
            <p class="quote"><?php echo $relate['story_quote'] ?></p>
            <img src="./assets/images/quote_sign.png" alt="quote_sign">
          </div>
        </div>
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

</main>
<!-- <?php echo $relate['title_opera'] ?>
<?php echo $relate['opera_text1'] ?>
<?php echo $relate['opera_text2'] ?>
<?php echo $relate['opera_text3'] ?>
<?php echo $relate['opera_quote'] ?>
<?php echo $relate['title_story'] ?>
<?php echo $relate['story_text1'] ?>
<?php echo $relate['story_text2'] ?>
<?php echo $relate['story_text3'] ?>
<?php echo $relate['story_quote'] ?> -->

<?php include '__footer.php'?>
