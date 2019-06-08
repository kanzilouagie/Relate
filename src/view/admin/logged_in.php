
<section class="admin_event logout">
    <h1>Log uit</h1>
    <h2>Hierna moet u zich weer aanmelden.</h2>
    <a class="submitform" href="index.php?page=logged_in&actie=loguit">log out</a>
  </section>

<section>

</section>

<div class= "login-form">
  <form method="POST">
    <input type="text" name="username" placeholder="username" required />
    <input type="password" name="password" placeholder="password" required>
    <input class="sb" type='submit' value='register' name='action' />
  </form>
</div>

<div>
  <?php foreach ($verhalen as $verhaal) {
    if($verhaal['published'] == false) { ?>
    <p><a href="index.php?page=edit&id=<?php echo $verhaal['id'] ?>"><?php echo $verhaal['story_name'] ?> - <?php echo $verhaal['name'] ?> - <?php echo $verhaal['type'] ?></a></p>
    <?php }}  ?>

  </div>
