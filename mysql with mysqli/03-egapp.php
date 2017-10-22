<?php
//error_reporting(0);
require '01-connect.php';
require 'security.php';

$records = array();

if (isset($_POST['fname']) && isset($_POST['lname']) && $_POST['bio']) {
  $first_name = trim($_POST['fname']);
  $last_name = trim($_POST['lname']);
  $bio = trim($_POST['bio']);

  if(!empty($first_name) && !empty($last_name) && !empty($bio)){
    $insert = $db->prepare("Insert into people (first_name, last_name, bio, created) values(?, ?, ?, NOW())");
    $insert->bind_param('sss', $first_name, $last_name, $bio);

    if($insert->execute()){
      //header('Location: 03-egapp.php');
      //die();
    }
  }
}

if ($results = $db->query('Select * from people')) {
  if ($results->num_rows) {
    while ($row = $results->fetch_object()) {
      $records[] = $row;
    }
    $results->free();
  }
}
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>People</title>
  </head>
  <body>
    <h2>People</h2>
    <?php
      if(!count($records)){
        echo 'No records';
      }
      else {
    ?>
      <table>
        <thead>
          <tr>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Bio</th>
            <th>Created</th>
          </tr>
        </thead>
        <tbody>
          <?php
          foreach ($records as $r) {
          ?>
          <tr>
            <td><?php echo escape($r->first_name); ?></td>
            <td><?php echo escape($r->last_name); ?></td>
            <td><?php echo escape($r->bio); ?></td>
            <td><?php echo escape($r->created); ?></td>
          </tr>
          <?php
          }
          ?>
        </tbody><br><br>
      </table>
    <?php
    }
    ?>
    <h3>Enter new Entery: </h3>
    <form class="" action="03-egapp.php" method="post">
      <label for="first_name">First Name</label>
      <input type="text" name="fname" value=""><br><br>
      <label for="last_name">Last Name</label>
      <input type="text" name="lname" value=""><br><br>
      <label for="bio">Bio</label>
      <textarea name="bio" rows="3" cols="20"></textarea><br><br>
      <input type="submit" name="" value="Insert">
    </form>
  </body>
</html>
