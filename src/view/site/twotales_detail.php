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
    <div class="gutter">
      <img src="./assets/images/twotales/twotales_01_left01.png" alt="">
    </div>
    <div class="gutter_text">
      <h2>title</h2>
      <p>djfksdfkjsdnf</p>
    </div>
    <div class="gutter">
      <img src="./assets/images/twotales/twotales_01_left01.png" alt="">
    </div>
    <div class="gutter">
      <img src="./assets/images/twotales/twotales_01_left01.png" alt="">
    </div>
  </div>

  <div id="list2" class="disable-scrollbars">
    <div class="gutter">
      <img src="./assets/images/twotales/twotales_01_right01.png" alt="">
    </div>
    <div class="gutter">
      <img src="./assets/images/twotales/twotales_01_right01.png" alt="">
    </div>
    <div class="gutter">
      <img src="./assets/images/twotales/twotales_01_right01.png" alt="">
    </div>
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
