<!--        array_diff() function used to delete an item in Associative Array. This function returns a new array, without the specified items. This function takes values as parameters, and not keys.-->

<?php
$super_store_employees = ["Amy"=>"Jonas", "Glenn"=>"Jerusha", "Dina"=>"Garet", "Sandra"=>"Jerry", "Meteo"=>"Jeff", "Cheyene"=>"Bo"];

$left_employees = array_diff($super_store_employees, ['Garet', 'Jerry']);
print_r($left_employees);
?>
