<div class="row-fluid">
  <div class="offset1 span10">
    <h2>Welcome to the admin page!</h2>
    <?php if ($_GET["loc"] == "fail"): ?>
      Authentication Failed
    <?php elseif ($_GET["loc"] == "pass"): ?>
      Authentication Passed
    <?php endif ?>
  </div>
</div>