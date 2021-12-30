<?php
/*
If there exists multiple file having same function / class / variables and both of them being called at same file
then there exists error 

For this we use namespace

Namespace should be initialzed at the beginning

*/

include ('file1.php');
include ('file2.php');

tirtha\fun();       // fun from namespace tirtha
jyoti\fun();        // fun from namespace jyoti

?>