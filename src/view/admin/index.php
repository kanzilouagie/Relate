
<div class="admin_login_body" >
  <?php
    if(isset($_POST['action'])){
      if($_POST['action'] === 'login') {
    if($_SESSION['logged_in'] === false) { ?>
    <div class="errors">
      <p>Wachtwoord en/of login is incorrect.</p>
    </div>
    <?php }}}; ?>

  <div class= "login_wrapper">
    <h1>admin Login</h1>
    <div class= "login-form">
      <form class="form_login__form" method='POST' action=''>
        <input class='inputfield' type='text' name='username' placeholder='Gebruikersnaam' required /><br /><br />
        <input class='inputfield' type='password' name='password' placeholder='Wachtwoord' required /><br /><br />
        <input class='sb' type='submit' value='login' name='action' />
      </form>
      <a href=""><p>Forgot your password?</p></a>
    </div>
  </div>
</div>
