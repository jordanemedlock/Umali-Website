<?php 
if ($fh = fopen("hit_count.csv", "a")){
  $string = " > ";
  $string .= getIPAddr().", ".time()."\n";
  fwrite($fh, $string);
  fclose($fh);
}

function getIPAddr()
{
  if (!empty($_SERVER['HTTP_CLIENT_IP']))
  //check ip from share internet
  {
    $ip=$_SERVER['HTTP_CLIENT_IP'];
  }
  elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))
  //to check ip is pass from proxy
  {
    $ip=$_SERVER['HTTP_X_FORWARDED_FOR'];
  }
  else
  {
    $ip=$_SERVER['REMOTE_ADDR'];
  }
  return $ip;
}

function total($array){
  $accum = 0;
  foreach ($array as $key => $value) {
    if ($key != "total" && $key != "ips"){
      $accum += $value;
    }
  }
  return $accum;
}

function ips($array){
  $accum = 0;
  foreach ($array as $key => $value) {
    if ($key != "total" && $key != "ips"){
      $accum++;
    }
  }
  return $accum;
}

?>