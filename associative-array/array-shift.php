<!--        Remove the first item of an array using array_shift().-->

<?php
$super_store_employees = ["Amy"=>"Jonas", "Glenn"=>"Jerusha", "Dina"=>"Garet", "Sandra"=>"Jerry", "Meteo"=>"Jeff", "Cheyene"=>"Bo"];

array_shift($super_store_employees);
print_r($super_store_employees);
?>