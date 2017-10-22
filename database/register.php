<?php
require 'core.inc.php';
include 'connect.php';

if(!loggedin()){

  if (isset($_POST['username']) &&
      isset($_POST['password']) &&
      isset($_POST['password_again']) &&
      isset($_POST['first_name']) &&
      isset($_POST['last_name'])) {

        $username = $_POST['username'];
        $password = $_POST['password'];
        $password_again = $_POST['password_again'];
        $password_hash = md5($password);
        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];

        if(!empty($username) &&
           !empty($password) &&
           !empty($password_again) &&
           !empty($first_name) &&
           !empty($last_name)){

              if($password != $password_again){
                echo 'Passwords do not match.<br><br>';
              }
              else {
                $query = "SELECT username from users where username = '$username'";
                $query_run = $db->query($query);
                $query_num_rows = $query_run->num_rows;

                if($query_num_rows >= 1){
                  echo 'Username '.$username.' already exist.';
                }
                else {
                  $query = "INSERT into users VALUES('','".$db->real_escape_string($username)."','".$db->real_escape_string($password_hash)."','".$db->real_escape_string($first_name)."','".$db->real_escape_string($last_name)."')";

                  if ($query_run = $db->query($query)) {
                    header('Location: register_success.php');
                  }
                  else {
                    echo 'Sorry we couldn\'t register at this time. Try again later.';
                  }
                }
              }
           }
        else {
          echo 'All fields are required.<br><br>';
        }

  }
?>

<form class="" action="register.php" method="post">
  Username:<br><input type="text" name="username" maxlength="40" value="<?php echo @$username;?>"><br><br>
  Password:<br><input type="password" name="password" value=""><br><br>
  Password again:<br><input type="password" name="password_again" value=""><br><br>
  First Name:<br><input type="text" name="first_name" maxlength="40" value="<?php echo @$first_name;?>"><br><br>
  Last Name:<br><input type="text" name="last_name" maxlength="40" value="<?php echo @$last_name;?>"><br><br>
  <input type="submit" name="" value="Register!">
</form>

<?php
}
elseif(loggedin()) {
  echo 'You\'re already logged in';
}
?>
