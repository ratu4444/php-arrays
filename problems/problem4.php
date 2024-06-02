Problem:
Find the difference between two arrays.

<?php
$array1 = [1, 2, 3, 4, 5];
$array2 = [4, 5, 6, 7, 8];
$difference = array_diff($array1, $array2);
print_r($difference);
?>