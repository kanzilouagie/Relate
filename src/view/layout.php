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
</html>
