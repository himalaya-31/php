<?php
$string = 'This is an example string & this is a tutorial.';
$string_word_count = str_word_count($string); //counts no of words
echo $string_word_count;
echo '<br>';
$string_word_count1 = str_word_count($string, 1);
print_r($string_word_count1);
echo '<br>';
$string_word_count2 = str_word_count($string, 2);
print_r($string_word_count2);
echo '<br>';
$string_word_count3 = str_word_count($string, 1, '.');
print_r($string_word_count3);
echo '<br>';
$string_word_count4 = str_word_count($string, 1, '&.');
print_r($string_word_count4);
echo '<br>';
$string_shuffle = str_shuffle($string);
echo $string_shuffle;

echo '<br>';
$substring = substr($string, 0, strlen($string)/2);
echo $substring;

echo '<br>';
$string_reverse = strrev($string);
echo $string_reverse;

echo '<br>';
$string_one = "This is my essay. I\'m going to be talking about php";
$string_two = "This is my essay. I will be talking about subject php";
similar_text($string_one, $string_two, $result);
echo 'The similarity between two text is '.$result;
 ?>
