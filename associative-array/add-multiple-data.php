<!--        Add multiple data is Associative Array using += operator.-->
<!--        Same operator for adding single and multiple data-->
<?php
$super_store_employees = ["Amy"=>"Jonas", "Glenn"=>"Jerusha", "Dina"=>"Garet", "Sandra"=>"Jerry", "Meteo"=>"Jeff", "Cheyene"=>"Bo"];

$super_store_employees += ['Sakib' => 'Mim'];
print_r($super_store_employees);
?>
