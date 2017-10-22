<?php
function hit_count(){
  $filename = 'count.txt';

  $handle = fopen($filename, 'r');
  $counter = fread($handle, filesize($filename));
  fclose($handle);

  $counter_inc = $counter + 1;

  $handle = fopen($filename, 'w');
  fwrite($handle, $counter_inc);
  fclose($handle);
  echo $counter_inc;
}

function search_ip(){
  $ip_address = $_SERVER['REMOTE_ADDR'];
  $ip_file = file('ip.txt');
  foreach ($ip_file as $ip) {
    $ip_single = trim($ip);

    if($ip_address == $ip_single){
      $found = true;
      break;
    }
    else {
      $found = false;
    }
  }
  if ($found == true) {
    echo '<br> IP found.';
  }

}
?>
