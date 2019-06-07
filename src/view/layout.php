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

  <div class="footer_logo"></div>

  <div class="footer_links">
    <section>
      <h3 class="footer_title">links:</h3>
      <p>www.operaballet.be</p>
      <p>www.vlaanderen.be</p>
      <p>www.antwerpen.be</p>
      <p>www.gent.be</p>
    </section>
    <section>
      <form action="POST">
        <input type="text">
        <input type="submit">
      </form>
    </section>
    <section>
    <h3 class="footer_title">navigatie:</h3>
      <p>www.operaballet.be</p>
      <p>www.vlaanderen.be</p>
      <p>www.antwerpen.be</p>
      <p>www.gent.be</p>
    </section>
  </div>

  <div>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum consequatur maxime a quo distinctio. Cum tempora aliquid, magni minus vitae porro atque incidunt cupiditate dignissimos enim ab molestiae omnis in!</p>
  </div>

</footer>
</html>
