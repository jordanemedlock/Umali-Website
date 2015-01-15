
<div class="row-fluid">
  <form class="span6" id="login-form" method="POST" action="admin.php">
    <h2>Log in</h2>
    <table>
      <tr><td><label for="username">Username: </label></td><td><input name="username" id="lusername" type="text"></td></tr>
      <tr><td><label for="password">Password: </label></td><td><input name="password" id="lpassword" type="password"></td></tr>
      <tr><td><input type="submit" class="btn btn-primary" value="Submit"/></td></tr>
    </table>
    <?php if ($_GET["loc"] == "fail"): ?>
      Login Failed
    <?php endif ?>
  </form>

  <form class="span6" id="signup-form" method="POST" action="data/users_create.php" target="sframe">
    <h2>Sign up</h2>
    <table>
      <tr><td><label for="username">Username: </label></td> <td><input id="susername" name="username" type="text"></td></tr>
      <tr><td><label for="email">Email: </label></td>       <td><input id="semail" name="email"    type="text"></td></tr>
      <tr><td><label for="password">Password: </label></td> <td><input id="spassword" name="password" type="password"></td></tr>
      <tr><td><label for="confirm">Confirm: </label></td>   <td><input id="sconfirm" name="confirm"  type="password"></td></tr>
      <tr><td><input type="submit" class="btn btn-primary" value="Submit"/></td></tr>
    </table>
    <iframe name="sframe"></iframe>
  </form>
</div>
