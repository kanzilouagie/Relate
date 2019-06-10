<?php include '__navigation.php'?>
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

<section class="twotale_flex">
<div id="list1">
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

<div id="list2">
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



<p>twotales</p>
<?php include '__footer.php'?>
