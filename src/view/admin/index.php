<main class="admin_page">
  <?php
  if(isset($_POST['action'])){
    if($_POST['action'] === 'login') {
  if($_SESSION['logged_in'] === false) { ?>
  <div class="errors">
    <p>Wachtwoord en/of login is incorrect.</p>
  </div>
  <?php }}}; ?>
  <div class="headers">
  <h1>Welkom terug, Benjamin</h1>
  <h2>Log u nu in om uw site te beheren</h2>
  </div>
  <div class="form_login">
    <form class="form_login__form" method='POST' action=''>
      <input class='inputfield' type='text' name='login' placeholder='Gebruikersnaam' required /><br /><br />
      <input class='inputfield' type='password' name='password' placeholder='Wachtwoord' required /><br /><br />
      <input class='submitform' type='submit' value='login' name='action' />
    </form>
  </div>
</main>
