<!--        Access Associative Array using key.-->
<!--        We need to access associative array using key.-->

<?php
$super_store_employees = ["Amy"=>"Jonas", "Glenn"=>"Jerusha", "Dina"=>"Garet", "Sandra"=>"Jerry", "Meteo"=>"Jeff", "Cheyene"=>"Bo"];
print_r($super_store_employees['Amy']);

//Access multiple data using foreeach()loop.

foreach ($super_store_employees as $key => $value) {
    var_dump($key);             //Check key.
    var_dump($value);           //Check value.
    var_dump($key, $value);     //Check both.
}
?>
