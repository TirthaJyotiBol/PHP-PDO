<?php
/*
    Multiple forms of a function
    -> Abstract
    -> Interface
*/


//                                           Through Abstraction :
abstract class sports{

    abstract function catch();
    abstract function goal();
    abstract function bat();
}

class cricket extends sports{
    function catch(){
        echo "catch \n";
    }
    function bat(){
        echo "Batting \n";
    }
    function goal(){
        echo "Cannot goal in cricket\n";
    }
}

$cricket = new cricket();
$cricket->catch();
$cricket->bat();
$cricket->goal();





//                                                   Through Interface : 
Interface sport{
    public function goal();
    public function field();
}

class football implements sport{
    function goal(){
        echo "Goal \n";
    }

    function field(){
        echo "Fielding";
    }
}

$football = new football();
$football->goal();
$football->field();



?>