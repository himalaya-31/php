<?php
$food = array('Pasta', 'Pizza', 'Burger');

echo $food[1];
echo '<br>';
print_r($food);
echo '<br>';
echo $food;
echo '<br>';
$food1 = array('Pasta'=>400, 'Pizza'=>1000, 'Burger'=>200);
print_r($food1);
echo '<br>';
echo $food1['Pasta'];
echo '<br>';

$food2 = array('Healthy'=>
                            array('Salad', 'Vegetables', 'Pasta'),
               'Unhealthy'=>
                            array('Pizza', 'Ice cream'));     //2d array
echo $food2['Healthy'][0];
echo '<br>';

foreach ($food2 as $element => $inner_array) {
  echo $element.'<br>';

  foreach ($inner_array as $item) {
    echo '-'.$item.'<br>';
  }
}
 ?>
