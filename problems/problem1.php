ARRAY PRACTICE
Advance Problem.

PROBLEM:

Title: Combine Single Array Elements with Nested Array Elements

Problem Statement:
You are provided with an array of arrays $arrayOfArray and a single array $array. Each nested array in $arrayOfArray contains elements, and your task is to insert the elements from $array into each nested array in a specific manner.
The objective is to combine the elements of $array with the elements of each nested array in $arrayOfArray such that each nested array receives elements from $array sequentially according to the index of the nested array.
For example, if $arrayOfArray contains nested arrays with elements "A, B" and "C, D", and $array contains elements "E, F", the resulting combined array for each nested array should include "A, B, E" for the first nested array and "C, D, F" for the second nested array.
Your challenge is to devise a solution that accomplishes this combination and produces the resulting combined arrays for each nested array in $arrayOfArray.

In addressing this problem, we've discovered three distinct solutions, each offering a unique approach. Despite their differences, they all successfully tackle the same challenge, showcasing the breadth of creative thinking in problem-solving.

FIRST SOLUTION.
<?php
$file =  'DearCustomerList(Test).csv';

$open = fopen($file, 'r');
$data = fgetcsv($open);

$csv_data = [];

while (($data = fgetcsv($open, 1000, ",")) !== false) {
    $data[]     = $data[2];
    $csv_data[] = $data;
    $invoices[] = $data[2];
}
    fclose($open);

print_r($csv_data);
?>


SECOND SOLUTION.
<?php
$csv_data = [];

if (($open = fopen($file, "r")) !== false) {
    while (($data = fgetcsv($open, 1000, ",")) !== false) {
        $invoice_unparsed = explode(", ", $data[2]);
        $invoice = $invoice_unparsed[0];
        $data[] = $invoice;
        $csv_data[] = $data;
    }
    fclose($open);
}
print_r($csv_data);
?>

THIRD SOLUTION.
<?php

$csv_data = [];

if (($open = fopen($file, "r")) !== false) {
    $index = 0;
    while (($data = fgetcsv($open, 1000, ",")) !== false) {
        $csv_data[$index] = $data;
        $invoice_unparsed = explode(", ", $data[2]);
        $invoice = $invoice_unparsed[0];
        $csv_data[$index][] = $invoice;
        $index++;
    }
    fclose($open);
}
print_r($csv_data);
?>

Don't judge.
