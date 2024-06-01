<!--    unset() function use to unset a value in a array. unset() function can unset single or multiple item.-->

<?php
$super_store_employees = ["Amy"=>"Jonas", "Glenn"=>"Jerusha", "Dina"=>"Garet", "Sandra"=>"Jerry", "Meteo"=>"Jeff", "Cheyene"=>"Bo"];

unset($super_store_employees['Amy'], $super_store_employees['Glenn']);
print_r($super_store_employees);
?>

