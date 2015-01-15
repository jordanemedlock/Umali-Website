<?php
$message = "";
$success = false;
if (!isset($_POST["username"])){
  $message = "No username provided";
  exit();
}
if (!isset($_POST["password"])){
  $message = "No password provided";
  exit();
}

$users = array();

if ($fh = fopen("data/users.json", "r")){
  $users = json_decode(fread($fh, filesize("data/users.json")));
  fclose($fh);
} else {
  $message = "Couldn't open file";
  exit();
}

$user = userfound($_POST["username"], $users);
if (!$user){
  $message = "Couldn't find username ".$_POST["username"];
  exit();
}

if (md5($_POST["password"]) != $user->password){
  $message = "Wrong password!";
  exit();
}
$message = true;
$success = true;

function userfound($user, $users){
  if (is_array($users)){
    foreach ($users as $key => $value) {
      if (strcasecmp($value->username, $user["username"])){
        return $value;
      }
    }
    return null;
  } else {
    return null;
  }
  return null;
}

?>