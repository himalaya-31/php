<?php
/*$string_array = array('Himalaya, ', 'Bhumika, ','Srishty');
$string_explode = explode(',', $string_array);*/

$filename = 'names1.txt';
$handle = fopen($filename, 'r');
$detail = fread($handle, filesize($filename));
$names_array = explode(',', $detail);

foreach ($names_array as $name) {
  echo $name.' ';
}

$array_name = array('Himalaya ','Bhumika ', 'Srishty ');
$implode = implode(',', $array_name);

echo '<br>'.$implode;
 ?>
