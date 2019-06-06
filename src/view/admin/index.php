<?php
  if(isset($_POST['action'])){
    if($_POST['action'] === 'login') {
  if($_SESSION['logged_in'] === false) { ?>
  <div class="errors">
    <p>Wachtwoord en/of login is incorrect.</p>
  </div>
  <?php }}}; ?>
<form class="form_login__form" method='POST' action=''>
      <input class='inputfield' type='text' name='username' placeholder='Gebruikersnaam' required /><br /><br />
      <input class='inputfield' type='password' name='password' placeholder='Wachtwoord' required /><br /><br />
      <input class='submitform' type='submit' value='login' name='action' />
    </form>
