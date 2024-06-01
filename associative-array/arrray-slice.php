<!--        We can a remove an array item using array_splice() function.-->

<!--        How array_splice() work?-->
<!--        Ans: array_splice($array, offset, length) function contain 4 parameter: 1. array: The input array. 2. offset: The position in the array where the removal or insertion starts. 3. length (optional): The number of elements to remove. If omitted, all elements from the offset to the end of the array are removed. 4. replacement (optional): An array of elements to insert into the array at the specified offset. If not provided, no elements are inserted.-->

<?php
$super_store_employees = ["Amy"=>"Jonas", "Glenn"=>"Jerusha", "Dina"=>"Garet", "Sandra"=>"Jerry", "Meteo"=>"Jeff", "Cheyene"=>"Bo"];
array_splice($super_store_employees, 3, 1);

print_r($super_store_employees);
?>
