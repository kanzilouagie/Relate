<!DOCTYPE html>
<html lang="nl">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js"></script>
  <link rel="stylesheet" href="style.css">
  <script>
    WebFont.load({
      custom: {
        families: ["Longreach Regular"],
        urls: ["assets/fonts/fonts.css"]
      }
    });

  </script>
  <title><?php echo($title);   ?></title>
  <?php echo($css);  ?>
</head>
<body>
  <?php  echo($content);  ?>
  <?php echo($js) ?>
</body>

<footer>


  <div class="footer_logo">
    <p>logo</p>
  </div>

  <div class="footer_flex">
    <section class="footer_links">
      <h3 class="footer_title">links:</h3>
      <a href=""><p>www.operaballet.be</p></a>
      <a href=""><p>www.vlaanderen.be</p></a>
      <a href=""><p>www.antwerpen.be</p></a>
      <a href=""><p>www.gent.be</p></a>
    </section>
    <section class="footer_form">
      <form action="POST">
        <input type="text">
        <input type="submit">
      </form>
    </section>
    <section class="footer_navigatie">
    <h3 class="footer_title">navigatie:</h3>
      <a href=""><p>www.operaballet.be</p></a>
      <a href=""><p>www.vlaanderen.be</p></a>
      <a href=""><p>www.antwerpen.be</p></a>
      <a href=""><p>www.gent.be</p></a>
    </section>
  </div>

  <div class="footer_copyright">
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum consequatur maxime a quo distinctio. Cum tempora aliquid, magni minus vitae porro atque incidunt cupiditate dignissimos enim ab molestiae omnis in!</p>
  </div>

</footer>
</html>
