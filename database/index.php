<?php
require 'connect.inc.php';
?>

<form class="" action="index.php" method="get">
  Choose a food type:
  <select class="" name="uh">
    <option value="u">Unhealthy</option>
    <option value="h">Healthy</option>
  </select><br><br>
  <input type="submit" name="" value="Submit">
</form>

<?php
if (isset($_GET['uh']) && !empty($_GET['uh'])) {

  $uh = strtolower($_GET['uh']);

  if ($uh == 'u' || $uh == 'h') {
    $query = "SELECT food, calories FROM food WHERE healthy_unhealthy = '$uh' ORDER BY id";

    if($query_run = mysqli_query($link, $query)){
      //echo 'Query Success';
      if (mysqli_num_rows($query_run) == NULL) {
      }
      else {
        while ($query_row = mysqli_fetch_assoc($query_run)) {
          $food = $query_row['food'];
          $calories = $query_row['calories'];
          echo $food.' has '.$calories.' calories.<br>';
        }
      }
    }
    else {
      echo mysqli_error($link);
    }
  }
  else {
    echo 'Must be u or h';
  }
}
?>
