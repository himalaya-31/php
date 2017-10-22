<?php
require 'core.inc.php';
require 'connect.php';

if (loggedin()) {
  $first_name = getuserfield('first_name', $db);
  $last_name = getuserfield('last_name', $db);
  echo 'You\'re logged in, '.$first_name.' '.$last_name.'.  <a href="logout.php">Log out</a><br>';
}
else {
  include 'loginform.inc.php';
}
?>
