<?php
$users = array();
$return = array();
$return["success"] = false; 
if (!isset($_POST["username"]) || empty($_POST["username"])){
  echo "Please provide a username";
  exit();
}

if (!isset($_POST["email"]) || empty($_POST["email"])){
  echo "Please provide a email";
  exit();
}

if (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)){
  echo "Please provide a valid email";
  exit();
}

if (!isset($_POST["password"]) || empty($_POST["password"])){
  echo "Please provide a password";
  exit();
}

if (strlen($_POST["password"]) < 6){
  echo "Password must be 6 or more characters long";
  exit();
}

if ($_POST["password"] != $_POST["confirm"]){
  echo "Passwords do not match";
  exit();
}

if ($fh = fopen("users.json", "r")){
  $string = fread($fh, filesize("users.json"));
  $users = json_decode($string);
  fclose($fh);
} else {
  echo "Could not open file try again";
  exit();
}

if (!userfound($_POST, $users) ){
  if ($fh = fopen("users.json", "w")){ 
    $user = $_POST;
    $user["username"] = strtolower($_POST["username"]);
    $user["password"] = md5($_POST["password"]);
    unset($user["confirm"]);
    $users[] = $user;

    fwrite($fh, json_encode($users));
    fclose($fh);
    echo 'Success!';
  }
} else {
  echo 'Username taken!';
  exit();
}

function userfound($user, $users){
  if (is_array($users)){
    foreach ($users as $key => $value) {
      if (strcasecmp($value->username, $user["username"]) == 0){
        return true;
      }
    }
    return false;
  } else {
    return false;
  }
  return false;
}
?>