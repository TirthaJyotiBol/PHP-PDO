<?php

/*

 1. static - delcared once takes the same memory if used multiple times
 2. objects cannot be created 
 3. class_name :: static_function / static_variable
 4. Here this keyword is not used
 5. we use self:: $variable  instead of this
 6. Here constructor cannot be called

*/

class tirtha{
    static $deg = "B.tech \n";
    static $stream;

    static function semester(){
        echo "Semester 5th \n";
    }

    static function stream($stream){
        self::$stream;
        echo $stream;
    }
}

//  For accessing static variables we cant create object rather we access through the mentioed below :

echo tirtha::$deg;
tirtha::semester();
tirtha::stream("Bachelors of Technology");

?>