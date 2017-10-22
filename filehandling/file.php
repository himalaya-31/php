<?php
$handle = fopen('names.txt', 'w');
fwrite($handle, 'Himalaya'."\n");
fwrite($handle, 'Baddhan'."\n");
fclose($handle);

echo 'Current names in the file: ';

$count = 1;
$readin = file('names.txt');
$readin_count = count($readin);

foreach ($readin as $fname) {
  echo trim($fname);

  if ($count < $readin_count) {
    echo ', ';
  }
  else {
    echo '.';
  }
  $count++;
}
?>
