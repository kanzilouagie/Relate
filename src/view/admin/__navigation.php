<div class="admin_dashboard">
<header class="admin_header">
  <nav>
    <div class="admin_nav">
      <h1 class="hidden">admin</h1>
      <section class="admin_home">
        <h2 class="hidden">home</h2>
        <a href="index.php?page=verhalen"><img src="./assets/images/logo.png" alt="logo" width="100" height="58" /></a>
      </section>
      <section class="admin_nav__inzendingen">
        <h2>Inzendingen</h2>
        <div>
          <a <?php if($_GET['page'] == "logged_in") { echo "class='admin_active'"; } ?> href="index.php?page=logged_in">Nieuwe inzendingen</a>
          <a <?php if($_GET['page'] == "alleinzendingen") { echo "class='admin_active'"; } ?> href="index.php?page=alleinzendingen">Alle inzendingen</a>
          <a <?php if($_GET['page'] == "gepubliceerd") { echo "class='admin_active'"; } ?> href="index.php?page=gepubliceerd">Gepubliceerd</a>
        </div>
      </section>

      <section class="admin_nav__hulp">
        <h2>Hulp</h2>
        <div>
        <a <?php if($_GET['page'] == "addadmin") { echo "class='admin_active'"; } ?> href="index.php?page=addadmin">Nieuwe admin toevoegen</a>
        </div>
      </section>
    </div>
    <div class="admin_headernav">

    </div>
  </nav>
</header>
