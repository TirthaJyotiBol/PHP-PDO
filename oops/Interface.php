<?php

/* 

 1. Multiple inhritance is not supported in PHP
 2. To extend multiple classes we use interface
 3. Interface should have functions that are not declared
 4. No Constructor
 5. Functions should be public
 
*/


interface sports{
    public function cricket(); 
}

interface entertainment{
    public function singing();
}

interface future{
    public function code();
}


// class Implementing mulltiple classes

class tv implements sports,entertainment,future{
    public function cricket(){
        echo "I am playing cricket \n";
    }

    public function singing(){
        echo "I will sing a song  \n";
    }

    public function code(){
        echo "Code Your Future \n";
    }
}

$tvObj = new tv();

$tvObj->singing();
$tvObj->cricket();
$tvObj->code();

?>