<?php
$time = time();
$actual_time = date('H:i:s', $time);
$actual_time1 = date('D M Y', $time);
$actual_time2 = date('d m Y', $time);
$actual_time3 = date('D M Y @ H:i:s', $time);
//see more on internet about date() function.
//strtotime() read about this
echo 'The current time is '.$actual_time;
echo '<br>The current time is '.$actual_time1;
echo '<br>The current time is '.$actual_time2;
echo '<br>The current time is '.$actual_time3;

 ?>
