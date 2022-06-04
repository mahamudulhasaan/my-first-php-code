

<?php 
// what is class and instance
//  below this defined system which is name oop class 

require_once "persone.php" ;
require_once "student.php" ;


//  below this defined system which is name oop instance
$n = new person ("Mahamudul Hasan", "Php developer");
$n ->setage(60) ;
// $n ->name = 'Mahamudul Hasan'; 
// $n ->surename = 'Php developer'; 
echo '<pre>' ;
 echo var_dump($n) ;
echo '</pre>';
echo $n->getage();

//  secound persone
$n2 = new person ("Hasan", "JavaScript developer");
echo '<pre>' ;
 echo var_dump($n2) ;
echo '</pre>';
// create person class in preson.php
// create instance of person
// using setter and getter

?>