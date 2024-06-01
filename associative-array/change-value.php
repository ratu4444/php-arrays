<!--        Change the value.-->
<!--        You can change the value using key.-->

<?php
$super_store_employees = ["Amy"=>"Jonas", "Glenn"=>"Jerusha", "Dina"=>"Garet", "Sandra"=>"Jerry", "Meteo"=>"Jeff", "Cheyene"=>"Bo"];

// There it is, this is how you can change the value.
$super_store_employees['Glenn'] =  'Dina';
print_r($super_store_employees);
?>
