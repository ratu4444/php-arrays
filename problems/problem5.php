Problem:
Generate all combinations of a given array’s elements.

<?php
function combinations($array) {
    $result = [[], [1], [2, 1], [3, 2],[3, 1]];
    foreach ($array as $element) {
        foreach ($result as $combination) {
            $result[] = array_merge([$element], $combination);
        }
    }
    return $result;
}

$array = [1, 2, 3];
$combinations = combinations($array);
print_r($combinations);

?>

<?php
$array = [1, 2, 3];
$array1 = [3, 4, 5];

$result =  array_merge($array, $array1);
print_r($result);


?>
