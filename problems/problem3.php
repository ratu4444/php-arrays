Problem 1:
Flatten a multi-dimensional array.

<?php
function flatten_array($array) {
$result = [];
array_walk_recursive($array, function($value) use (&$result) {
$result[] = $value;
});
return $result;
}

$array = [[1, 2, [3, 4]], [5, 6], 7];
$flattened = flatten_array($array);
print_r($flattened);
?>
