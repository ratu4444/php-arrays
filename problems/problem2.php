Problem:
Group array elements by a condition (e.g., even and odd numbers).

<?php
$numbers    = [1,2,3,4,5,6,7,8,9];
$even       = [];
$odd        = [];

foreach ($numbers as $number) {
    if ($number % 2 === 0) {
        $even[] = $number;
    }
    else{
        $odd[] = $number;
    }
}

print_r($even);
print_r($odd);
?>

<!--        Little advance solution-->
<?php
$array = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$grouped = ['even' => [], 'odd' => []];

foreach ($array as $value) {
    if ($value % 2 === 0) {
        $grouped['even'][] = $value;
    } else {
        $grouped['odd'][] = $value;
    }
}

print_r($grouped);
?>


