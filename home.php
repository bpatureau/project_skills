<?php
  require_once("config.php");
  
?>

<form action="api.php" method="post" class="form_login">
  <div class="field">
    <label class="email" for="email">email</label>
    <input type="email" name="email" class="form_login_email">
  </div>
  <div class="field">
    <label class="password" for="pass">password</label>
    <input type="password" name="pass" class="form_login_pass">
  </div>
  <button class="button">Confirmer</button>
</form>
