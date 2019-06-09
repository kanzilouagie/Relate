<?php include '__navigation.php'?>
<main>
  <section class="admin__top_header">
  <button class="toggle_menu"><img src="./assets/images/menu_button.png" alt="menu button"></button>
    <a href="#">Voeg een nieuwe administrator toe</a>
    <a class="submitform" href="index.php?page=logged_in&actie=loguit"><span class="logout_text">Uitloggen</span></a>
  </section>

<section class="dashboard_main addadmin">
  <div class="login-form">
    <form method="POST">
      <input type="text" name="username" placeholder="username" required />
      <input type="password" name="password" placeholder="password" required>
      <input class="sb" type='submit' value='register' name='action' />
    </form>
  </div>
  </section>
</main>
</div>
