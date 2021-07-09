<?php

include'./include/db.php';




//Notes:

/* in PDO Class fetch() is defined in key value pair , so to access the value we call the key */

// example of key :
/*
FETCH_BOTH,
FETCH_NUM,
FETCH_ASSOC,
*/

// TO ACCESS THE Static function or variable of class we use 'Scop Resolution opretor'-->> ::

// define("rd","cscsdfsdf");
// echo rd;



$stmp=$db->query("Select * from users");
echo '<pre>';


// PDO::FETCH_ASSOC
/*

while($row=$stmp->fetch(PDO::FETCH_ASSOC))
{
    print_r($row);
}

output:

Array
(
    [id] => 1
    [First_name] => Ramiz
    [last] => Belim
)
*/

// -------------------------------

// PDO::FETCH_NUM

// while($row=$stmp->fetch(PDO::FETCH_NUM))
// {
//     // print_r($row);
//     // ------Or-----
//     // echo $row[1];
// }

// Output:

/*
Array
(
    [0] => 1
    [1] => Ramiz
    [2] => Belim
)
*/

// ----------------------------------

// PDO::FETCH_BOTH

// while($row=$stmp->fetch(PDO::FETCH_BOTH))
// {
//     print_r($row);
// }

// Output:
/*

Array
(
    [id] => 1
    [0] => 1
    [First_name] => Ramiz
    [1] => Ramiz
    [last] => Belim
    [2] => Belim
)

*/


// ---------------------------
//FETCH_OBJ
/*
 fetch(PDO::FETCH_OBJ)
 will return array of Object
*/
/* php has a default emty or standers class here 

PDO::FETCH_OBJ will send information from db in the form of object ,php will use its default class 
'stdClass' and creates its Object -> Object



*/

// while($row=$stmp->fetch(PDO::FETCH_OBJ))
// {


//     print_r($row);
// ----Or--------------
/*
we can print single item of object  
print_r($row->id);
*/
// }

// Output:
/*


stdClass Object
(
    [id] => 1
    [First_name] => Ramiz
    [last] => Belim
)

*/

// fetchAll() 

$stmt=$db->query('SELECT * FROM users');
 $rows = $stmt->fetchAll();
 foreach ($rows as $row ) {
  echo $row['First_name'];
  echo $row['last']. '<br>' ;
 }

//  Output:
// RamizBelim


exit();

?>