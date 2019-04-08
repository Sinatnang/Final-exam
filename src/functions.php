<?php
namespace inclcud;
class functions {
    public $sum;
    public $minus;
    public $multiply;
    public $divide;
    public function __contrute($sum,$minus,$multiply,$divide){
        $this->sum=$sum;
        $this->minus=$minus;
        $this->multiply=$multiply;
        $this->divide=$divide;
    }
   public function getSum(){
       $num2=0;
       $sum1= $sum+$num2;
       return $this->$sum1;
   }
   public function getMinus(){
    $mimus1= $minus-$minus2;
    return $this->$minus1;
}
public function getMultiply(){
    $multiply1= $multiply*$multiply2;
    return $this->$multiply;
}
public function getDivide(){
    $divide1=$divide/$divide2;
    return $this->$divide;
}
}
?>