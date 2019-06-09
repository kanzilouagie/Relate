<?php include '__navigation.php' ?>

<section class="fold">
  <div class="fold_black">
    <div class="fold_text">
      <h1>Opera & Ballet Saai?</h1>
      <p>Opera stukken duren te lang, zijn saai of vertellen ons verhalen waarmee we ons niet verbinden </p>
      <p>Opera stukken duren te lang, zijn saai of vertellen ons verhalen waarmee we ons niet verbinden Opera stukken duren te lang, zijn saai of vertellen ons verhalen waarmee we ons niet verbinden Opera stukken duren te lang, zijn saai of vertellen ons verhalen waarmee we ons niet verbinden Opera stukken duren te lang, ons niet verbinden </p>
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
<?php include '__footer.php'?>
