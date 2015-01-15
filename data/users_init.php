<?php
$users = array();
if ($fh = fopen("users.json", "w")){
  fwrite($fh, "[]");
  fclose($fh);
}
?>