<!DOCTYPE html>
<html lang="nl">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js"></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js'></script>
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
  <!-- <script type="text/javascript">
        var winHeight = $(window).innerHeight();
    $(document).ready(function () {

    });

    window.addEventListener('resize', function (event) {
        //$(".panel").height($(window).innerHeight());
    });
    $(window).on('scroll',function(){
        $(".panelCon").css('bottom',$(window).scrollTop()*-1);
    });
  </script> -->

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
<body <?php echo($backgroundcolor);  ?>>
  <?php  echo($content);  ?>
  <script src="https://unpkg.com/wavesurfer.js"></script>
  <script src="js/filter.js"></script>
  <?php echo($js) ?>
</body>
</html>
