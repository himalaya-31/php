<?php
$find = 'is';
$find_length = strlen($find);
$offset = 0;
$string = 'This is a string and it is an example.';

while($string_position = strpos($string, $find, $offset)){
  echo '<strong>'.$find.'</strong> found at '.$string_position.'<br>';
  $offset = $string_position + $find_length;
}

$string_new = substr_replace($string, 'himalaya', 24, 2);
//substr_replace(string, substring, start index of string, length of string that you want to replace);
echo '<br>'.$string_new;

$new_string = str_replace('is', 'hello', $string);
echo '<br>'.$new_string;
$find = array('is', 'string', 'example');
$new_string1 = str_replace($find, '', $string);
echo '<br>'.$new_string1;
$replace = array('IS', 'STRING', 'EXAMPLE');
$new_string2 = str_replace($find, $replace, $string);
echo '<br>'.$new_string2;
 ?>
