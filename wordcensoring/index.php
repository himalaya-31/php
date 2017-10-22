<?php
  $user_input = '';
  if (isset($_POST['user_input']) && !empty($_POST['user_input'])) {
    echo $user_input = $_POST['user_input'];
  }
 ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <hr>
    <form class="" action="index.php" method="post">
      <textarea name="user_input" rows="6" cols="30"><?php echo $user_input; ?></textarea><br><br>
      <input type="submit" name="" value="Submit">
    </form>
  </body>
</html>
