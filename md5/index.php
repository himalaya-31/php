<?php
  if(isset($_POST['password']) && !empty($_POST['password'])){
     echo $password = md5($_POST['password']);
    $filename = 'hash.txt';
    $handle = fopen($filename, 'r');
    $file_password = fread($handle, filesize($filename));
    echo '<br>',$file_password;

    if($password == trim($file_password)){
      echo '<br>Correct password';
    }
    else{
      echo '<br>Incorrect password';
    }
  }
  //fclose($handle);
?>

<form class="" action="index.php" method="post">
  Password: <input type="text" name="password" value=""><br><br>
  <input type="submit" name="" value="Submit">
</form>
