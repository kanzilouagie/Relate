
<header class="header_home">
<nav class="nav">
        <div class="container">
            <div class="logo">
            <a href="index.php?page=home"><img  src="./assets/images/logo.png" alt="" height="50px" ></a>
            </div>
            <div id="mainListDiv" class="main_list">
                <ul class="navlinks">
                    <li><a href="index.php?page=home">Home</a></li>
                    <li><a href="index.php?page=verhalen">Verhalen</a></li>
                    <li><a href="index.php?page=twotales">TwoTales</a></li>
                    <li><a href="index.php?page=admin">Admin</a></li>
                </ul>
            </div>
            <span class="navTrigger">
                <i></i>
                <i></i>
                <i></i>
            </span>
        </div>
    </nav>
</header>

<script>
        $(window).scroll(function() {
            if ($(document).scrollTop() > 50) {
                $('.nav').addClass('affix');
                console.log("OK");
            } else {
                $('.nav').removeClass('affix');
            }
        });
</script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="js/script.js"></script>

<!--
<a href="index.php?page=home"><img  src="./assets/images/logo.png" alt="" height="50px" ></a>
  <nav class="navigation">
    <a href="index.php?page=home">home</a>
    <a href="index.php?page=verhalen">verhalen</a>
    <a href="index.php?page=twotales">TwoTales</a>
    <a href="index.php?page=admin">admin</a>
  </nav> -->
