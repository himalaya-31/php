<?php
if (isset($_POST['username']) && isset($_POST['password'])) {
  $username = $_POST['username'];
  $password = md5($_POST['password']);
  if (!empty($username) && !empty($password)) {
    $query = "SELECT id from users where username = '$username' AND password = '$password'";

    if($query_run = $db->query($query)){
        $query_num_rows = $query_run->num_rows;

        if($query_num_rows == 0){
          echo 'Invalid username/password combination';
        }
        elseif ($query_num_rows == 1) {
          $user_id = $query_run->fetch_object();
          $_SESSION['user_id'] = $user_id->id;
          header('Location: home.php');
        }
    }
  }
  else {
    echo 'You must supply a username/password';
  }
}
?>

<form class="" action="<?php echo $current_file; ?>" method="post">
  Username: <input type="text" name="username" value="">  Password: <input type="password" name="password" value="">
  <input type="submit" name="" value="Log in">
</form>
