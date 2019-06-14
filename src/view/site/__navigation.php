
<header class="header_home">
<nav class="nav">
        <div class="container">
            <div class="logo">
            <a href="index.php?page=home"><img  src="./assets/images/logo.png" alt="" height="50px" ></a>
            </div>
            <div id="mainListDiv" class="main_list">
                <ul class="navlinks">
                    <li><a <?php if($_GET['page']== 'verhalen' ) { echo($activestate); } ?> href="index.php?page=verhalen">Verhalen</a></li>
                    <li><a <?php if($_GET['page']== 'twotales' ) { echo($activestate); } ?> href="index.php?page=twotales">Relates</a></li>
                    <li><a <?php if($_GET['page']== 'text_upload' ) { echo($activestate); } ?> href="index.php?page=text_upload">Vertel</a></li>

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
