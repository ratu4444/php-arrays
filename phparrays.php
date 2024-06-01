//        PHP ARRAYS

//        What is ARRAY?
//        Ans: An array is a special variable that can hold many values under a single name, and you can access the values by referring to an index number or name.
//        Ans1: An ordered collection of elements, which can be of any data type (such as integers, strings, or objects). Arrays are indexed, meaning each element in the array has a specific position (index) that can be used to access it.

//        What is ITEM in array?
//        Ans: Also known as an element, it is a single value within the array. For example, in an array of integers, each integer is an item.

//        Example of an ITEM:
//        $super_store_employees = ['Jonas', 'Meteo', 'Glen', 'Dina', 'Sandra', 'Cheyne', 'Amy', 'Marcus', 'Gareet'];
//        In this array 'Jonas' is an item, Dina is an item.

//        What is Element?
//        Ans: In the context of an array, an "element" refers to each individual value or data item stored within the array.
//        For example, in the array ["A", "B", "C"], each letter ("A", "B", and "C") is an element of the array. Similarly, in the array [1, 2, 3, 4], each number (1, 2, 3, and 4) is an element of the array.

//        Difference between Element and Item?
//        Ans: In the context of arrays, the terms "element" and "item" are often used interchangeably to refer to individual values stored within the array. Both terms convey the same meaning and are used to describe the individual data entities contained within an array.

//        What id INDEX?
//        Ans: The position of an item within an array. Indexing typically starts at 0 in many programming languages, so the first item is at index 0, the second item is at index 1, and so on.

//        Example of an INDEX.
//        $super_store_employees = [1 => 'Jonas', 2 => 'Meteo', 3 => 'Glen', 4 => 'Dina', 5 => 'Sandra', 6 => 'Cheyne', 7 => 'Amy', 8 => 'Marcus', 9 =>  'Gareet'];
//        In this array 1, 2 ,3 ...9 is index.

//        What is INDEXED ARRAY?
//        Ans:  In indexed arrays each item has an index number. By default, the first item has index 0, the second item has item 1.

//        Example of a INDEXED ARRAY.
//        $super_store_employees = ['Jonas', 'Meteo', 'Glen', 'Dina', 'Sandra', 'Cheyne', 'Amy', 'Marcus', 'Gareet'];

//        Add a value in an Indexed Array.
//        $super_store_employees[] =  'something';





//        Remove the last item of an array using array_pop().
//        array_pop($super_store_employees);
//        print_r($super_store_employees);

//        Remove the first item of an array using array_shift().
//        array_shift($super_store_employees);
//        print_r($super_store_employees);

//        ARRAY SORTING

//        sort() use for sort Indexed Array in ascending order.
sort($super_store_employees_indexed);
//        print_r($super_store_employees_indexed);

//        rsort() use for sort Indexed Array in descending order.
rsort($super_store_employees_indexed);
//        print_r($super_store_employees_indexed);

//        asort() use for sort Associative Array in ascending order, according to the key.
asort($super_store_employees);
//        print_r($super_store_employees);

//        asort() use for sort Associative Array in ascending order, according to the value.
asort($super_store_employees);
//        print_r($super_store_employees);

//        arsort() use for sort Associative Array in descending order, according to the value.
arsort($super_store_employees);
//        print_r($super_store_employees);

//        ksort() use for sort Associative Array in ascending order, according to the key.
ksort($super_store_employees);
//        print_r($super_store_employees);

//        krsort() use for sort Associative Array in descending order, according to the key.
krsort($super_store_employees);
//        print_r($super_store_employees);

//        MULTIDIMENSIONAL ARRAY

//        What is Multidimensional Array?
//        Ans: A multidimensional array is an array containing one or more arrays.

//        Example of Multidimensional Array:
$cars =[
["Volvo",22,18],
["BMW",15,13],
["Saab",5,2],
["Land Rover",17,15]
];

//        Access Multidimensional Array Data.
//        print_r($cars[0][0]);

//        There are lots of array function for manipulate array. They are:
//        array()	Creates an array
//        array_change_key_case()	Changes all keys in an array to lowercase or uppercase
//        array_chunk()	Splits an array into chunks of arrays
//        array_column()	Returns the values from a single column in the input array
//        array_combine()	Creates an array by using the elements from one "keys" array and one "values" array
//        array_count_values()	Counts all the values of an array
//        array_diff()	Compare arrays, and returns the differences (compare values only)
//        array_diff_assoc()	Compare arrays, and returns the differences (compare keys and values)
//        array_diff_key()	Compare arrays, and returns the differences (compare keys only)
//        array_diff_uassoc()	Compare arrays, and returns the differences (compare keys and values, using a user-defined key comparison function)
//        array_diff_ukey()	Compare arrays, and returns the differences (compare keys only, using a user-defined key comparison function)
//        array_fill()	Fills an array with values
//        array_fill_keys()	Fills an array with values, specifying keys
//        array_filter()	Filters the values of an array using a callback function
//        array_flip()	Flips/Exchanges all keys with their associated values in an array
//        array_intersect()	Compare arrays, and returns the matches (compare values only)
//        array_intersect_assoc()	Compare arrays and returns the matches (compare keys and values)
//        array_intersect_key()	Compare arrays, and returns the matches (compare keys only)
//        array_intersect_uassoc()	Compare arrays, and returns the matches (compare keys and values, using a user-defined key comparison function)
//        array_intersect_ukey()	Compare arrays, and returns the matches (compare keys only, using a user-defined key comparison function)
//        array_key_exists()	Checks if the specified key exists in the array
//        array_keys()	Returns all the keys of an array
//        array_map()	Sends each value of an array to a user-made function, which returns new values
//        array_merge()	Merges one or more arrays into one array
//        array_merge_recursive()	Merges one or more arrays into one array recursively
//        array_multisort()	Sorts multiple or multi-dimensional arrays
//        array_pad()	Inserts a specified number of items, with a specified value, to an array
//        array_pop()	Deletes the last element of an array
//        array_product()	Calculates the product of the values in an array
//        array_push()	Inserts one or more elements to the end of an array
//        array_rand()	Returns one or more random keys from an array
//        array_reduce()	Returns an array as a string, using a user-defined function
//        array_replace()	Replaces the values of the first array with the values from following arrays
//        array_replace_recursive()	Replaces the values of the first array with the values from following arrays recursively
//        array_reverse()	Returns an array in the reverse order
//        array_search()	Searches an array for a given value and returns the key
//        array_shift()	Removes the first element from an array, and returns the value of the removed element
//        array_slice()	Returns selected parts of an array
//        array_splice()	Removes and replaces specified elements of an array
//        array_sum()	Returns the sum of the values in an array
//        array_udiff()	Compare arrays, and returns the differences (compare values only, using a user-defined key comparison function)
//        array_udiff_assoc()	Compare arrays, and returns the differences (compare keys and values, using a built-in function to compare the keys and a user-defined function to compare the values)
//        array_udiff_uassoc()	Compare arrays, and returns the differences (compare keys and values, using two user-defined key comparison functions)
//        array_uintersect()	Compare arrays, and returns the matches (compare values only, using a user-defined key comparison function)
//        array_uintersect_assoc()	Compare arrays, and returns the matches (compare keys and values, using a built-in function to compare the keys and a user-defined function to compare the values)
//        array_uintersect_uassoc()	Compare arrays, and returns the matches (compare keys and values, using two user-defined key comparison functions)
//        array_unique()	Removes duplicate values from an array
//        array_unshift()	Adds one or more elements to the beginning of an array
//        array_values()	Returns all the values of an array
//        array_walk()	Applies a user function to every member of an array
//        array_walk_recursive()	Applies a user function recursively to every member of an array
//        arsort()	Sorts an associative array in descending order, according to the value
//        asort()	Sorts an associative array in ascending order, according to the value
//        compact()	Create array containing variables and their values
//        count()	Returns the number of elements in an array
//        current()	Returns the current element in an array
//        each()	Deprecated from PHP 7.2. Returns the current key and value pair from an array
//        end()	Sets the internal pointer of an array to its last element
//        extract()	Imports variables into the current symbol table from an array
//        in_array()	Checks if a specified value exists in an array
//        key()	Fetches a key from an array
//        krsort()	Sorts an associative array in descending order, according to the key
//        ksort()	Sorts an associative array in ascending order, according to the key
//        list()	Assigns variables as if they were an array
//        natcasesort()	Sorts an array using a case insensitive "natural order" algorithm
//        natsort()	Sorts an array using a "natural order" algorithm
//        next()	Advance the internal array pointer of an array
//        pos()	Alias of current()
//        prev()	Rewinds the internal array pointer
//        range()	Creates an array containing a range of elements
//        reset()	Sets the internal pointer of an array to its first element
//        rsort()	Sorts an indexed array in descending order
//        shuffle()	Shuffles an array
//        sizeof()	Alias of count()
//        sort()	Sorts an indexed array in ascending order
//        uasort()	Sorts an array by values using a user-defined comparison function and maintains the index association
//        uksort()	Sorts an array by keys using a user-defined comparison function
//        usort()	Sorts an array by values using a user-defined comparison function
}