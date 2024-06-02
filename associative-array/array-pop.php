<!--        Remove the last item of an array using array_pop().-->

<?php
$super_store_employees = ["Amy"=>"Jonas", "Glenn"=>"Jerusha", "Dina"=>"Garet", "Sandra"=>"Jerry", "Meteo"=>"Jeff", "Cheyene"=>"Bo"];

array_pop($super_store_employees);
print_r($super_store_employees);
?>