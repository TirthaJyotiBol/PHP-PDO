<!-- This is used to give access to a function and behaviour  By default its Public -->
<!-- we use protected so that access is denied outside -->
<?php 
class encap{
    protected $i;

    public function getI(){
        return $this->i;
    }

    public function setI($i){
        $this->i = $i;
    }
}

$obj = new encap();
$obj->setI(10);
$ans = $obj->getI();
echo $ans;

?>