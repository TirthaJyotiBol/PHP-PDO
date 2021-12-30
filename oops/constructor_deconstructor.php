<?php
// constructor is always called at the beginning of the program when object of that class is created
// Destructor is always called at the end of the class
class name {
    public $n;
    
    function __construct($n){           // Constructor
        echo "Constructor \n";
        $this->n = $n;
    }

    function __destruct(){              // Destructor
        echo "Leave World \n";
    }

    function display(){
        echo "Hello $this->n \n";
    }

    function fun(){
        echo "showing method 2 \n";
    }
}

$n = new name("Tirtha");
$n->display();
$n->fun();

?>