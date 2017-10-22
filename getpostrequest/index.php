<?php

if(isset($_GET['day']) && isset($_GET['date']) && isset($_GET['month']) && isset($_GET['year'])){
  $day = htmlentities($_GET['day']);
  $date = htmlentities($_GET['date']);
  $month = htmlentities($_GET['month']);
  $year = htmlentities($_GET['year']);

  if(!empty($day) && !empty($date) && !empty($month) && !empty($year)){
    echo "It is ".$day.' '.$date.' '.$month.' '.$year.'<br>';
  }
}

?>

<form class="" action="index.php" method="GET">
  Day:<br><input type="text" name="day" value=""><br>
  Date:<br><input type="text" name="date" value=""><br>
  Month:<br><input type="text" name="month" value=""><br>
  Year:<br><input type="text" name="year" value="">
  <br><input type="submit" name="submit" value="Submit">
</form>
