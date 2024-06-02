<!--        ksort() use for sort Associative Array in ascending order, according to the key.-->

<?php
$super_store_employees = ["Amy"=>"Jonas", "Glenn"=>"Jerusha", "Dina"=>"Garet", "Sandra"=>"Jerry", "Meteo"=>"Jeff", "Cheyene"=>"Bo"];

ksort($super_store_employees);
print_r($super_store_employees);
?>