<?php

class animal{
   private $name;
   private $step;

   public function getName_step($name,$step){
    $this->name = $name;
    $this->step = $step;

    echo $name." is moving with steps = ".$step;
   }
}

$anobj = new animal;
$anobj->getName_step("Dog",22);



?>