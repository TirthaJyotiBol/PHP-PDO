<?php

trait par{
    function par(){
        echo "Parent trait \n";
     }
}

trait child{
    function child(){
        echo "Child trait \n";
     }
}

trait subchild{
    function sub(){
        echo "Sub child trait";
    }
}
// The childrens of the class cannot use the trait declared in parent
class uses{
    // Only the traits we want we use this
    use par;
    use subchild;
}

//Make object of the uses class to use all the traits declared

$u = new uses();
$u->par();
$u->sub();


?>