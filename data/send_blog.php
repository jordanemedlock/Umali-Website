<?php

$emails = array();
if ($fh = fopen("test_list.json", "r")){
  $emails = json_decode(fread($fh, filesize("test_list.json")), true);
  fclose($fh);
}

foreach ($emails as $name => $email) {
  # code...
}


?>