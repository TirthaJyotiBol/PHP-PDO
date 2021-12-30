<?php
class c1{

    function call1(){
        echo "Hello World from 1 \n";
    }

    function call2(){
        echo "Hello from 2";
    }
}

$obj1 = new c1;
$obj1->call1();

$obj2 = new c1;
$obj2->call2();

?>