<?php

/*

 Atleast 1 function that is declared but not defined 
 All the abstract functions inside abstract class should be overrided 
 we cannot create Oobject of abstact class 
 
*/

abstract class c{
    abstract function display();
    abstract function age();

    function x(){
        echo "Hello from abstract class with concrete method \n";
    }
}

class c2 extends c{
    function display(){
        echo "Displaying in class c2 because we cannot declare in abstract class \n";
    }

    function age(){
        return 22;
    }
}

$obj = new c2();

$obj->display();

$age = $obj->age();
echo $age."\n";

$obj->x();



?>