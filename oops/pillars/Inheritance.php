<?php
    class parent_{
        public $i = 10;
        public $c = "Parent class";

        function callParent(){
            echo $this->i ." ". $this->c ."\n";
            $this->i = 21;
        }
    }

    class child extends parent_{
        function callChild(){
            echo $this->i ." ". $this->c;
        }
    }

    $childObj = new child();

    $childObj->callParent();
    $childObj->callChild();

?>