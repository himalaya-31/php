<?php
session_start();

if(!isset($_POST['secure'])){
    $_SESSION['secure'] = rand(1000,9999);
}
else {
    if($_SESSION['secure'] == $_POST['secure']){
      echo 'A match';
    }
    else {
      echo 'Incorrect Value, try again.';
    }
}
?>

<img src="captcha.php" alt=""><br>

<form class="" action="captcha1.php" method="post">
  Type the value you see: <input type="text" size="6" name="secure" value="">
  <input type="submit" name="" value="Submit">
</form>
